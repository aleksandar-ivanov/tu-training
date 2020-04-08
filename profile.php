<?php

    session_start();

    if (!isset($_SESSION['name'])) {
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="/node_modules/bulma/css/bulma.css">
</head>
<body>
    <div class="container">
    <h1 class="is-size-1">
        Hello, <?= $_SESSION['name'] ?> 
    </h1>

    <a href="/logout.php">Logout</a>
    </div>
</body>
</html>
