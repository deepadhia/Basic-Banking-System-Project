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
$q="select * from bbk.transaction_history";
$result=mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <style>

   </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class = "navbar navbar-expand-lg bg-dark navbar-dark">
        <marquee><h1 class=" text-warning">Sparks Foundation Bank</h1></marquee>
</nav>
<br>
<a href="index.php"> 
<input type="image" src="home.png" class="home"/>
</a>
 <center><h1>Recent Transactions</h1></center>
 <br> <br>

    <table class="table table-dark table-bordered text-center w-50 mx-auto">
    <thead>
            <th>ID</th>
           <th>Sender</th>
           <th>Receiver</th>
           <th>Amount</th>
       </thead>
       <tbody>
        <tr>
        
            <?php while($row=mysqli_fetch_array($result)) {?>
                <td style="width: 70px;">
                    <?php echo $row['id'];?>
                </td>
                <td>
                    <?php echo $row['sender'];?>
                </td>
                <td>
                    <?php echo $row['receiver'];?>
                </td>
                <td>
                    <?php echo $row['amount'];?>
                </td>
                
            
            </tr>
            <?php } ?>

       </tbody>
 </table>

</body>
</html>