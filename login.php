<?php
$valid_username = "admin";
$valid_password = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($username) || empty($password)) {
        echo "<h3>Both fields are required.</h3>";
        echo "<a href='login.html'>Go back</a>";
        exit;
    }

    if ($username === $valid_username && $password === $valid_password) {
        header("Location: index.html");
        exit;
    } else {
        echo "<h3>Invalid credentials. Try again.</h3>";
        echo "<a href='login.html'>Go back</a>";
        exit;
    }
} else {
    header("Location: login.html");
    exit;
}
?>