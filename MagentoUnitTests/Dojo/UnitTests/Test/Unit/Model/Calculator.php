<?php
namespace Dojo\UnitTests\Test\Unit\Model;

class Calculator extends \PHPUnit\Framework\TestCase
{
    protected $objectManager;
    protected $model;

    /**
     * This function is called before the test runs.
     * Ideal for setting the values to variables or objects.
     */
    protected function setUp()
    {
        $this->objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->model = $this->objectManager->getObject("Dojo\UnitTests\Model\Calculator");
    }

    /**
     * This function is called after the test runs.
     * Ideal for setting the values to variables or objects.
     */
    public function tearDown()
    {
    }

    /**
     * this function tests the result of the addition of two numbers
     *
     */
    public function testAdd()
    {
        $result = $this->model->add(5.0, 5.0);
        $expectedResult = 10.0;
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * this function tests the result of the subtraction of two numbers
     *
     */
    public function testSubtract()
    {
        $result = $this->model->subtract(5.0, 2.0);
        $expectedResult = 3.0;
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * this function tests the result of the multiplication of two numbers
     *
     */
    public function testMultiply()
    {
        $result = $this->model->multiply(5.0, 10.0);
        $expectedResult = 50.0;
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * this function tests the result of the division of two numbers
     */
    public function testDivide()
    {
        $result = $this->model->divide(6.0, 2.0);
        $expectedResult = 3.0;
        $this->assertEquals($expectedResult, $result);
    }
}
