<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="backend/register.php" method="post">
        <input type="text" name="name" placeholder="Masukkan nama anda" required><br>
        <input type="email" name="email" placeholder="Masukkan email anda" required><br>
        <input type="password" name="password" placeholder="Masukkan password anda" required><br>
        <input type="password" name="confirm" placeholder="Konfirmasi password anda" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($password != $confirm) {
        echo "Password tidak sesuai.";
        exit;
    }

    // Simpan ke database (simulasi tanpa database)
    file_put_contents('users.txt', "$name|$email|$password|user\n", FILE_APPEND);
    header("Location: login.php");
}
?>
