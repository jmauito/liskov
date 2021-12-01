<?php
/**
 * Exercice for Liskov principle
 * For codely.tv course of SOLID
 * This class respects the Liskov principle in tweet function.
 */
include_once "./Bird.php";

class Canary extends Bird
{
    function tweet()
    {
        return "sings";
    }
}
