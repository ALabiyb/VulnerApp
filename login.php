<?php
// Intentionally vulnerable authentication
$valid_username = "admin";
$valid_password = "password";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $valid_username && $password == $valid_password) {
    echo "Login successful! Welcome, $username.";
} else {
    echo "Login failed. Invalid username or password.";
}
?>
