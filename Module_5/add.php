<?php

class Person
{
    private $name, $email;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

$classPerson = new Person();


if (isset($_POST['submit'])) {
    $personName = $_POST['name'];
    $personEmail = $_POST['email'];

    $classPerson->setName($personName);
    $classPerson->setEmail($personEmail);
}
