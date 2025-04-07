<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__.'/../src/Funcoes.php';

class FuncoesTest extends TestCase
{
    // Testes para isEven()
    public function testIsEvenWithEvenNumber()
    {
        $this->assertTrue(Funcoes::isEven(4));
    }

    public function testIsEvenWithOddNumber()
    {
        $this->assertFalse(Funcoes::isEven(5));
    }

    public function testIsEvenWithZero()
    {
        $this->assertTrue(Funcoes::isEven(0));
    }

    // Testes para factorial()
    public function testFactorialOfZero()
    {
        $this->assertEquals(1, Funcoes::factorial(0));
    }

    public function testFactorialOfOne()
    {
        $this->assertEquals(1, Funcoes::factorial(1));
    }

    public function testFactorialOfFive()
    {
        $this->assertEquals(120, Funcoes::factorial(5));
    }

    public function testFactorialOfNegativeNumber()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-5);
    }

    // Testes para isPalindrome()
    public function testIsPalindromeWithValidPalindrome()
    {
        $this->assertTrue(Funcoes::isPalindrome("A man a plan a canal Panama"));
    }

    public function testIsPalindromeWithNonPalindrome()
    {
        $this->assertFalse(Funcoes::isPalindrome("PHPUnit"));
    }

    public function testIsPalindromeWithEmptyString()
    {
        $this->assertTrue(Funcoes::isPalindrome(""));
    }

    public function testIsPalindromeWithSpecialChars()
    {
        $this->assertTrue(Funcoes::isPalindrome("Was it a car or a cat I saw?"));
    }

    public function testIsPalindromeWithNumbers()
    {
        $this->assertTrue(Funcoes::isPalindrome("12321"));
    }

    // Testes para fahrenheitToCelsius()
    public function testFahrenheitToCelsiusFreezingPoint()
    {
        $this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
    }

    public function testFahrenheitToCelsiusBoilingPoint()
    {
        $this->assertEquals(100, Funcoes::fahrenheitToCelsius(212));
    }

    public function testFahrenheitToCelsiusNegativeValue()
    {
        $this->assertEquals(-20, Funcoes::fahrenheitToCelsius(-4));
    }

    // Testes para calculateDiscount()
    public function testCalculateDiscountWithValidValues()
    {
        $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
    }

    public function testCalculateDiscountWithZeroPercent()
    {
        $this->assertEquals(100, Funcoes::calculateDiscount(100, 0));
    }

    public function testCalculateDiscountWithFullDiscount()
    {
        $this->assertEquals(0, Funcoes::calculateDiscount(100, 100));
    }

    public function testCalculateDiscountWithNegativePrice()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(-100, 10);
    }

    public function testCalculateDiscountWithNegativePercent()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(100, -10);
    }
}