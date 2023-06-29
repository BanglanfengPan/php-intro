<?php

class Author extends Person
{
    public static $centuryPopular = "19th";
    private $penName;

    function __construct($itemFirst = "", $itemLast = "", $itemYear = "", $itemPenName = "")
    {
        
        echo "Author Constructor".PHP_EOL;

        $this->penName = $itemPenName;

        Parent::__construct($itemFirst, $itemLast, $itemYear); # calls parent constructor to construct the parent class variables
    }

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }

    // public function getFullName() # child method will overwrite the method in the Person class
    // {

    //     echo "Author->getFullName()".PHP_EOL;

    //     return $this->firstName." ".$this->lastName.PHP_EOL;

    // }

    // public function getFirstName() #
    // {

    //     echo "Author->getFullName()".PHP_EOL;

    //     // return $this->firstName." ".$this->lastName." a.k.a. ".$this->penName.PHP_EOL;

    //     return $this->penName.PHP_EOL;

    // }

    public function getCompleteName() # child method will overwrite the method in the Person class
    {

        echo "Author->getFullName()".PHP_EOL;

        // return $this->firstName." ".$this->lastName." a.k.a. ".$this->penName.PHP_EOL;

        return $this->getFullName()." a.k.a. ".$this->penName.PHP_EOL;

    }

    public static function getCenturyAuthorWasPopular() #statis property has to use self instead of this
    {
        return self::$centuryPopular.PHP_EOL; # in children of this class you will use parent instead of seld=f

    }

    // garbage cleanup occurs once the php script is done executing
    // php automatically cleans triggers descruct function for this class
    // the most absolute end
    function __destruct()
    {
        echo "Never put off till tomorrow. - ".$this->penName;
    }


}
?>