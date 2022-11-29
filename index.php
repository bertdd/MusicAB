<?php
require_once 'person.class.php';
echo 'Goodbye cruel silly disgusting World!' . PHP_EOL;
// Akif was here
// Kagu was here

$glenn = new Person(["Glenn"], "Jacobs");
echo $glenn->getInititials($glenn->FirstNames, $glenn->LastName);

require_once ('Music.class.php');

$person = new Artist("Bruce", "Springsteen");

echo $person->Initials;


?>