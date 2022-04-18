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

$name1 = $_SESSION['name'];
$q="select * from bbk.users where name not like '$name1'";
$result=mysqli_query($con, $q);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
<nav class = "navbar navbar-expand-lg bg-dark navbar-dark">
        <marquee><h1 class=" text-warning">Sparks Foundation Bank</h1></marquee>
</nav>
<br>
<a href="index.php"> 
 <input type="image" src="home.png" class="home"/>
 </a>
 <br>
 <center><h1>Transfer Amount</h1></center>
 <br> <br>
    <div>
    <form action="intermediate.php" method="post">    
    <table class="table table-striped table-bordered text-center w-50 mx-auto">
            <tr>
                <td>
                    <label for="sender">Receiver Name :</label>
                    &nbsp;
                </td>
                <td>
                    <select name="receiver" style="width: 257px; height:33px ;cursor:pointer;font-size:medium;">
                        <?php while($row=$result->fetch_assoc()){?>
                        <option value="<?php echo $row['name'];?>"> <?php echo $row['name'];?> </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
                <br>
            <tr >
                <td>
                    <label for="transfer">Amount:</label>
                </td>
                <td>
                    <input type="number" name="transfer" required style="width: 242px;">
                </td>
            </tr>

            <tr>
                
                <td>
                    <button type="submit" class="btn btn-warning btn-lg text-center" value="credit" class="view" >Transfer</button>
                    
                </td>
            </tr>
                        
    </form>
    </div>
    <br>
    <tr>
    <td>
 <form action="user.php" method="post">
     <button class="btn btn-danger btn-lg text-center" name="name" type="submit" value="<?php echo $name1 ?>">Back</button>
 </form>
    </td>
    </tr>
 </table>
</body>
</html>