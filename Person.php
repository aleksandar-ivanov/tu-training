<?php

class Person {

    const MIN_CHARS = 3;

    const MAX_CHARS = 50;

    protected $name;

    protected $age;

    protected $city;

    protected $email;

    protected $errors = [];

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function validate()
    {
        $nameLength = $this->name;

        if ($nameLength < static::MIN_CHARS || $nameLength > static::MAX_CHARS) {
            $this->errors['name'] = "Name must be between {3} and {50} characters!";
        }
        
        return count($this->errors) === 0;
    }
}