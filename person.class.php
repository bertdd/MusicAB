<?php
class Person
{
  public int $Id;

  public array $FirstNames;

  public string $LastName;

  public string $MiddleName;

  public array $Email;

  public array $Phone;

  public string $Address;

  public string $ZipCode;

  public string $Place;

  public string $Country;

  public function __construct(array $FirstNames, string $LastName){
      $this->FirstNames = $FirstNames;
      $this->LastName = $LastName;
  }

  public function getInititials($FirstNames, $LastName){
      $initials = [];
      foreach ($FirstNames as $firstname) {
          array_push($initials, $firstname[0]);
      }

      array_push($initials, $LastName[0]);
      $initials = implode(".", $initials) . ".";
      return ($initials);
  }
  //public DateTime $DateOfBirth;

  //public DateTime $DateOfDeath;
}
?>