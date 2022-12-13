<?php 

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