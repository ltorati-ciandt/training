<?php
namespace Dojo\UnitTests\Model;

class Calculator
{
    /**
     * This function returns the result of the addition of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * This function returns the result of the subtraction of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public function subtract($a, $b)
    {
        return $a - $b;
    }

    /**
     * This function returns the result of the multiplication of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * This function returns the result of the division of two numbers
     *
     * @param float $a
     * @param float $b
     * @return float
     */
    public function divide($a, $b)
    {
        return $a / $b;
    }
}
