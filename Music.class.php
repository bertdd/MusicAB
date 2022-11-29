<?php

require_once ('Membership.Class.php');
require_once ('Person.Class.php');
require_once ('Band.class.php');


//$person1->Biography = "Speelde in de bav
//echo $person1->LastName;


class Track
{
  public string $Title;

  public int $Duration;   // in seconds.

  public array $Artists;

  public Genre $Genre;
}

class Artist extends Person
{
  public function __construct(string $FirstName, string $lastName)
  {
    $this->FirstName = $FirstName;
    $this->LastName = $lastName;
    $this->Initials = $this->FirstName[0] . " . " . $this->LastName[0];
  }

  public array $Band;

  public string $Biography;
}



?>