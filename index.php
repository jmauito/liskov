<?php
/**
 * Exercice for Liskov principle
 * For codely.tv course of SOLID
 * In the implementation of class Sparrow and Canary,
 * Sparrow produces an error because, the program
 * expects a string and not an array.
 */

include "Sparrow.php";
include "Canary.php";


$sparrow = new Sparrow('Jack');
$canary = new Canary('Tweety');

echo "I have two pets: {$sparrow->getName()} who {$sparrow->tweet()}";
echo " and {$canary->getName()} who {$canary->tweet()} ";
