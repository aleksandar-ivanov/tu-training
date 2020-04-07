<?php

$name = isset($_POST['name']) ? $_POST['name'] : null;

if (!$name) {
    echo "Name is required";
    exit;
}

if (mb_strlen($name) < 3 || mb_strlen($name) > 5) {
    echo "Name must be between 3 and 5 characters!";
    exit;
}

echo "Name: {$name} is correct";

