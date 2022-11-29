<?php

require_once ('Membership.Class.php');

echo "test";
$person1 = new Artist("Bruce", "Springsteen");
//$person1->Biography = "Speelde in de bav
//echo $person1->LastName;
echo "bla";


class Track
{
  public string $Title;

  public int $Duration;   // in seconds.

  public array $Artists;

  public Genre $Genre;
}

class Artist extends Person
{
  public function __construct(string $firstName, string $lastName)
  {
    //$this->FirstName = $firstName;
    //$this->LastName = $lastName;
  }

  public array $Band;

  public string $Biography;
}

class Person
{
  public int $Id;

  public array $FirstName;

  public string $LastName;

  public string $MiddleName;

  public array $Email;

  public array $Phone;

  public string $Address;

  public string $ZipCode;

  public string $Place;

  public string $Country;

  //public DateTime $DateOfBirth;

  //public DateTime $DateOfDeath;
}

?>