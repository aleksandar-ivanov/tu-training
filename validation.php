<?php

require_once "Person.php";

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
$city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

$person = new Person();
$person->setName($name);

$isValid = $person->validate();

if ($isValid) {
    echo "All data is valid";
} else {
    $errors = $person->getErrors();

    var_export($errors);
}
