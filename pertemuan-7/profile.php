<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['name']; ?>!</h1>
    <a href="admin.php">Halaman Admin</a> | 
    <a href="logout.php">Logout</a>
</body>
</html>