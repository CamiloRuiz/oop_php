<?php

class Person
{
    protected $firstName; // public, protected <-> private
    protected $lastName;
    protected $birthdate;
    protected $nickname;
    protected $changedNickname = 0;

    public function __construct($firstName, $lastName, $birthdate)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthdate = $birthdate;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setNickname($nickname)
    {
        if (strlen($nickname) <= 2) {
            throw new Exception(
                "The nickname should be larger than two characters"
            );
        }

        if (($nickname == $this->firstName) || ($nickname == $this->lastName)) {
            throw new Exception(
                "The nickname should be different to your firstname or lastname"
            );
        }

        if ($this->changedNickname >= 2) {
            throw new Exception(
                "You can't change a nickname more than 2 times"
            );
        }
        $this->nickname = $nickname;
        $this->changedNickname++;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getAge()
    {
        $birthdate = new DateTime($this->birthdate);
        $now = new DateTime();
        $age = $now->diff($birthdate);
        return "$age->y years old";
    }
}

$person1 = new Person('Duilio', 'Palacios');
$person1->setNickname('Silence');
$person1->setNickname('Sileence');

exit($person1->getNickname());

echo $person1->getFullName();
