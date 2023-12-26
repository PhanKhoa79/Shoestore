<?php 
use PHPUnit\Framework\TestCase;
require './Algorithm.php';
class AlgorithmTest extends TestCase
{
    public function testBubbleSort()
    {
        $inputArray = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
        $expectedArray = [1, 1, 2, 3, 3, 4, 5, 5, 5, 6, 9];

        $algorithm = new Algorithm();
        $result = $algorithm->bubbleSort($inputArray);

        $this->assertEquals($expectedArray, $result);
    }

    public function testLinearSearch()
    {
        $inputArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $searchValue = 7;

        $algorithm = new Algorithm();
        $result = $algorithm->linearSearch($inputArray, $searchValue);

        $this->assertEquals(6, $result); // 7 found at index 6
    }

    public function testFactorial()
    {
        $inputNumber = 5;
        $expectedResult = 120;

        $algorithm = new Algorithm();
        $result = $algorithm->factorial($inputNumber);

        $this->assertEquals($expectedResult, $result);
    }
    
}
?>