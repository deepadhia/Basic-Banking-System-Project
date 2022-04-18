<?php

session_start();
$server="localhost";
$username="root";
$password="";
$db="bbk";

$con=mysqli_connect($server,$username,$password,$db);

if(! $con)
{
    die ("Connection failed due to".mysqli_connect_error());
}
$name=$_SESSION['name'];
$q="select * from bbk.users where name='$name'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$from=$row['name'];
$var1=$row['amount'];

$to=$_POST['receiver'];
$q1="select * from bbk.users where name='$to'";
$result1=mysqli_query($con,$q1);
$row1=mysqli_fetch_array($result1);
$var2=$row1['amount'];
session_destroy();

if($var1 >=$_POST["transfer"])
{
    //update in bbk.bank.users table
    $sub=$var1-$_POST["transfer"];
    $q="update bbk.users set amount = '$sub' where name='$from'";
    $result=mysqli_query($con,$q);


    $sum=$var2+$_POST["transfer"];
    $q="update bbk.users set amount= '$sum' where name= '$to'";
    $result=mysqli_query($con,$q);

    //update in bbk.transaction_history table
    $c=$_POST["transfer"];
    $q="insert into bbk.transaction_history(sender,receiver,amount)
    values('$from','$to','$c')";
    $result=mysqli_query($con,$q);
    include 'accountdetails.php';
    $message="Transfer of Rs $c was Successful";
    echo"<script type='text/javascript'>alert('$message');</script>";   
 }
    else{
        include 'accountdetails.php';
        $message="Insufficient Balance";
        echo"<script type='text/javascript'> alert('$message'); </script>";
    }

?>