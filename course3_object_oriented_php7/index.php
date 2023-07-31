<?php

# below throws a warning if file not found
include 'person.php';
include_once 'author.php';
# below throws error and exists if not found
# require'person.php';
# require_once 'author.php';

$myObj = new Person("Samuel Langhorne", "Clemens", 1899);

// echo $myObj->firstName . "\n";

// $myObj->firstName = "Sam";

// echo $myObj->firstName . "\n";

echo $myObj::AVG_LIFE_SPAN. "\n"; # scope resolution operator, can access constansts inside of a class like this
echo Person::AVG_LIFE_SPAN. "\n";

// # below also works for a constant
// echo Person::AVG_LIFE_SPAN. "\n";

// $myObj->setFirstName("Sam2");

// echo $myObj->firstName . "\n";

// echo $myObj->getFirstName(). "\n";

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899, "Mark Twain"); #person classes constructor because it is inherited

// echo $newAuthor->getFullName();

// echo $newAuthor->penName; # protected properties and methods cannot be accessed outside of the class itself, only inside of the class and outside of the class

// echo $newAuthor->getFullName(); # protected property cannot be accessed outside of the class itself

// echo $newAuthor->getCompleteName(); # this function can actually access protected properties and methods since this function is public

echo $newAuthor->getCompleteName();

echo $newAuthor::CENTURYPOPULAR.PHP_EOL;
echo Author::$centuryPopular.PHP_EOL; #this is how you acccess public statis property inside of a class
Author::$centuryPopular = '18th';
echo Author::getCenturyAuthorWasPopular().PHP_EOL;

echo "the end is here".PHP_EOL; # as you can see distructor happens after the last line


echo $newAuthor->getFirstName();


### Interface below

# to be this interface we need to fulfill function this interface implements
# function within this interface have to be public
interface Electricity
{
    public function voltage();
    public function electricCordType();
    public function outletStyle();
}

# now this class will not throw error
# now any electrical defice can use electricity interface to not forget which methods to implement
class Television implements Electricity
{
    public function changeChannel()
    {

    }

    public function adjustVolume()
    {

    }

    public function voltage()
    {

    }

    public function electricCordType()
    {

    }
    public function outletStyle()
    {

    }
}

# abstract classes now
# common methods can actually be implemented in the abstract class (in the interface you cannot write functions, only their names)
# in the interface above we could not imlement actuals methods that can be inhertited
# but abstract class still tells children classes which methods must be implemented (abstract value)
# basically it is a more comprehensive interface
abstract class ElectricityAbstract
{
    abstract function voltage();
    abstract function electricCordType();
    abstract function outletStyle();

    public function powerOn()
    {
        echo 'hellow';
    }

    public function powerOff()
    {
        echo 'hellow';
    }

}

# now this class will not throw error
# now any electrical defice can use electricity interface to not forget which methods to implement
class TelevisionAbstract extends ElectricityAbstract
{
    public function changeChannel()
    {

    }

    public function adjustVolume()
    {

    }

    public function voltage()
    {

    }

    public function electricCordType()
    {

    }

    public function outletStyle()
    {

    }
}

?>
