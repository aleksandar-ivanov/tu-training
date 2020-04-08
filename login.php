<?php

$name = "admin";
$password = "admin!";

$nameInput = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$passwordInput = $_POST['password'] ?? null;

if (strlen($nameInput) < 1 || strlen($passwordInput) < 1) {
    echo "Name and password are required";
    exit;
}

if ($nameInput !== $name || $passwordInput !== $password) {
    echo "Wrong name or password";
    exit;
}

session_start();
$_SESSION['name'] = $name;

header("Location: profile.php");

