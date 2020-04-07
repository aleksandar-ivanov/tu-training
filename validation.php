<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$minChars = 3;
$maxChars = 50;
$nameLength = mb_strlen($name);

if (!$name) {
    echo "Name is required";
    exit;
}

if ($nameLength < $minChars || $nameLength > $maxChars) {
    echo "Name must be between {$minChars} and {$maxChars} characters!";
    exit;
}

echo "Name: {$name} is correct";

