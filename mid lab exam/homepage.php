<?php
session_start();

if (!isset($_SESSION['status'])) 
{
    header('location: login.html');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome Home, <?=$_SESSION['username']?>!</h1>
    <a href="logout.php">Logout</a>
</body>
</html>