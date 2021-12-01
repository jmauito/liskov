<?php
/**
 * Exercice for Liskov principle
 * For codely.tv course of SOLID
 * This class don't respects the Liskov 
 * principle in tweet function because 
 * returns an array when the pattern class 
 * returns a string .
 */
include_once "Bird.php";

class Sparrow extends Bird
{
    function tweet()
    {
        return [
            'bird' => __CLASS__,
            'sound' => 'chrip'
        ];
    }
}
