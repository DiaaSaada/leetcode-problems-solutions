<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use  \LeetCode\IntegertoRoman;
final class IntegerToRomanTest extends TestCase
{

    public function test40(): void
    {
        $this->assertEquals(
            "XL",
            IntegertoRoman::intToRoman(40)
        );
    }

    public function test3(): void
    {
        $this->assertEquals(
            "III",
            IntegertoRoman::intToRoman(3)
        );
    }

    public function test999(): void
    {
        $this->assertEquals(
            "CMXCIX",
            IntegertoRoman::intToRoman(999)
        );
    }



}