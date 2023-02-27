<?php

class Person
{
    private $name, $email;

    function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

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

    public function DisplayPerson()
    {
        echo "Name: {$this->name}\n";
        echo "Email: {$this->email}\n";
    }
}

$classPerson = new Person('Tamzid', 'aytamzid@gmail.com');
$classPerson->DisplayPerson();

echo "\n";

$classPerson->setName('Tamzid');
$classPerson->setEmail('tamzid@gmail.com');
$classPerson->DisplayPerson();
