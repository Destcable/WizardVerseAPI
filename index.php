<?php

require 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Client\Database;
use Client\Entity\Dragon;
use Client\Entity\Phoenix;
use Client\Event\TournamentEvent;
use Client\Faculty;
use Client\MagicalWorld;
use Client\SpecialAbility;
use Client\Spell;
use Client\Wizard\ProfessorWizard;
use Client\Wizard\StudentWizard;
use Client\MagicalItem;

echo '<pre>';

$magicalWorld = new MagicalWorld();

$fireBreathing = new SpecialAbility("Breathes fire");
$healingTears = new SpecialAbility("Heals with tears");

$dragon = new Dragon("Fire Dragon", $fireBreathing, "Breathes fire and has tough scales");
$phoenix = new Phoenix("Fawkes", $healingTears, "Rises from ashes and has healing tears");

$gryffindor = new Faculty("Gryffindor");
$slytherin = new Faculty("Slytherin");

$Harry_Potter = new StudentWizard("Harry Potter", $gryffindor, 17);
$Hermione_Granger = new StudentWizard("Hermione Granger", $gryffindor, 18);
$Draco_Malfoy = new StudentWizard("Draco Malfoy", $slytherin, 17);

$professor1 = new ProfessorWizard("Severus Snape", $slytherin, 38);
$professor2 = new ProfessorWizard("Minerva McGonagall", $gryffindor, 55);

$expelliarmus = new Spell("Expelliarmus", "Charm", "Disarms your opponent");
$lumos = new Spell("Lumos", "Spell", "Creates light at the tip of your wand");

$wand = new MagicalItem("Wand", "A magical tool for spellcasting", "Tool");
$book = new MagicalItem("Spell Book", "Contains spells and incantations", "Book");
$cloak = new MagicalItem("Invisibility Cloak", "Grants invisibility to the wearer", "Cloak");

$professor1->addSpell($expelliarmus, 3);
$professor1->addSpell($lumos, 3);

$professor1->teachSpeel($expelliarmus, $Harry_Potter);

$tournament = new TournamentEvent(
    name: "Wizarding Tournament",
    description: "A magical duel competition", 
    date: "2023-09-15 12:00:00", 
    prize:30000
);

$magicalWorld->addEvent($tournament);

$magicalWorld->listEvents();


Database::addWizard($Harry_Potter);
Database::addWizard($Hermione_Granger);
Database::addWizard($Draco_Malfoy);

Database::addSpell($expelliarmus);
Database::addSpell($lumos);

Database::filterByFaculty($gryffindor);
Database::searchSpell('Expelliarmus');

$wizards = Database::getWizards();
$spells = Database::getSpells();
// https://docs.google.com/document/d/112ViJhoeVohTvzikWkewZBr-HQq0uERrXrRyRqrwc6o/edit