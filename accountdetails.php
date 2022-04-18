<?php
session_start();
$server="localhost";
$username="root";
$password="";
$db="bbk";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con)
{
    die("connection to this database failed due to:".mysqli_connect_error());
}
$q="select * from bbk.users";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class = "navbar navbar-expand-lg bg-dark navbar-dark">
        <marquee><h1 class=" text-warning">Sparks Foundation Bank</h1></marquee>
    </nav>
    <br>
    <a href="index.php">
    <input type="image" src="home.png" class="home">
    </a>
    <br><br>
    <h1 style ="text-align:center">Customers</h1>
    <br>
    <table class="table table-dark table-bordered text-center w-50 mx-auto">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Account</th>
        <th>View</th>
        </thead>
        <tbody>
            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-1" class="btn btn-primary">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-2" class="btn btn-primary">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-3" class="btn btn-primary">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-4" class="btn btn-primary">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-5" class="btn btn-primary">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-6" class="btn btn-primary">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-7" class="btn btn-primary">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-8" class="btn btn-primary">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-9" class="btn btn-primary">Account Info</button>
                    </form>
                </td>
            </tr>

            <tr>
                <?php
                    $row=mysqli_fetch_array($result);
                ?>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td>
                    <form action="user.php" method="post">
                        <button type="submit" name="name" value="Person-10" class="btn btn-primary">Account Info</button>
                    </form>
                </td>
            </tr>
</body>
</html>