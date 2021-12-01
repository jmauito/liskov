<?php
/**
 * Exercice for Liskov principle
 * For codely.tv course of SOLID
 * This is the pattern class.
 */
class Bird
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }

    function tweet()
    {
        return "tweet";
    }
}
