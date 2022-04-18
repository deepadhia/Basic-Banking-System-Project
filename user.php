<?php
    session_start();
    $server="localhost";
    $username="root";
    $password="";
    $db="bbk";

    $con=mysqli_connect($server,$username,$password,$db);
    if(!$con)
    {
        die("Connection Failed");
    }
    $name=$_POST['name'];
    $q="select * from bbk.users where name='$name'";
    $result=mysqli_query($con,$q);
    $row_count=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    $id=$row['id'];
    $mail=$row['email'];
    $amount=$row['amount'];

    $_SESSION['name']=$name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class = "navbar navbar-expand-lg bg-dark navbar-dark">
        <marquee><h1 class=" text-warning">Sparks Foundation Bank</h1></marquee>
    </nav>
    <br>
    <a href="index.php">
    <input type="image" src="home.png" class="home"></a>
    <center><h1>Account Details</h1></center>
    <br> <br>
    <table class="table table-dark table-bordered text-center w-50 mx-auto">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Account</th>
        </thead>

        <tbody>
            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>

                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $mail ?></td>
                <td><?php echo $amount ?></td>
            </tr>
        </tbody>
    </table>

    <br>
    <center>
    <a href="transferto.php">
    <button class="btn btn-primary btn-lg" href="transferto.php">Transfer To</button></a>

    <br>
    <br>
    <a href="accountdetails.php">
    <button class="btn btn-danger btn-lg" href="accountdetails.php">Back</button></a></center>

</body>
</html>