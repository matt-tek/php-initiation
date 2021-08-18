<?php
include_once("astonaut.php");

$neil = new Astronaut("Neil");
$buzz = new Astronaut("Buzz");

echo $neil->getId() . "\n";
echo $buzz->getId() . "\n";
?>