<head>
    <style>
        .error {
            color: red;
            font-weight: 600;
        }

        .success {
            color: green;
            font-weight: 700;
        }
    </style>
</head>
<?php

const MIN_CHARS = 3;
const MAX_CHARS = 50;

$error = null;
$success = null;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$nameLength = mb_strlen($name);

if (!$name) {
    $error = 'Name is required';
} else {
    if ($nameLength < MIN_CHARS || $nameLength > MAX_CHARS) {
        $error = sprintf("Name must be between %d and %d characters!", MIN_CHARS, MAX_CHARS);
    } else {
        $success = "Name: {$name} is correct";
    }
}

if ($success) {
    echo "<p class='success'>{$success}</p>";
} elseif ($error) {
    echo "<p class='error'>{$error}</p>";
}




