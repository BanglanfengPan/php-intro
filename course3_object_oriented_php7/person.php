<?php

class Person { # if we add final here, nobody will be able to inherit Person class


    const AVG_LIFE_SPAN = 80; # can only access constant inside of our person class, can be an equation but cannot access other class variables
    private $firstName; # to set default: `= "Samuel Langhorne"`;
    private $lastName; #to set default: `= "Clemens"`;
    private $yearBorn; #to set default: `= 1899`;
    # private -> outside of class access - no, inherited classes access - no
    # protected -> outside of class access - no, inherited classes access - yes

    function __construct($itemFirst = "", $itemLast = "", $itemYear = "") #like init in python
    {
        echo "Person Constructor".PHP_EOL;

        $this->firstName = $itemFirst;
        $this->lastName = $itemLast;
        $this->yearBorn = $itemYear;
    }

    final public function getFirstName() # by deafault all methods are set to public even if we did not set them as public
    # for the final in the beginning means that all classes that inherit Person class will not be able to overwrite Person
    {
        return $this->firstName;
    }

    public function setFirstName($tempName)
    {

        $this->firstName = $tempName;

    }

    protected function getFullName()
    {

        echo "Person->getFullName()".PHP_EOL;

        return $this->firstName." ".$this->lastName.PHP_EOL;

    }



}

?>