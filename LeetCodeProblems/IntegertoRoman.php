<?php

namespace LeetCode;
class IntegertoRoman
{

    /**
     * @param Integer $num
     * @return String
     */
    public static function intToRoman($num)
    {
        $romans = [
            ["s" => "I", 'v' => 1],
            ["s" => "IV", 'v' => 4],
            ["s" => "V", 'v' => 5,],
            ["s" => "IX", 'v' => 9],
            ["s" => "X", 'v' => 10],
            ["s" => "XL", 'v' => 40],
            ["s" => "L", 'v' => 50],
            ["s" => "XC", 'v' => 90],
            ["s" => "C", 'v' => 100],
            ["s" => "CD", 'v' => 400],
            ["s" => "D", 'v' => 500],
            ["s" => "CM", 'v' => 900],
            ["s" => "M", 'v' => 1000],
        ];

        $res = '';
        $i = count($romans) - 1;
        while ($num > 0) {
            ["s" => $char, 'v' => $val ] = $romans[$i];
            $subtract = intdiv($num, $val);
            if ($subtract > 0) {
                $res .= str_repeat($char, $subtract);
                $num -= $val * $subtract;
            }
            $i--;
        }

        return $res;

    }
}

/**
 * Problem Link
 * https://leetcode.com/problems/integer-to-roman/
 *
 * Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.

Symbol       Value
I             1
V             5
X             10
L             50
C             100
D             500
M             1000
For example, 2 is written as II in Roman numeral, just two one's added together. 12 is written as XII, which is simply X + II. The number 27 is written as XXVII, which is XX + V + II.

Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not IIII. Instead, the number four is written as IV. Because the one is before the five we subtract it making four. The same principle applies to the number nine, which is written as IX. There are six instances where subtraction is used:

I can be placed before V (5) and X (10) to make 4 and 9.
X can be placed before L (50) and C (100) to make 40 and 90.
C can be placed before D (500) and M (1000) to make 400 and 900.
Given an integer, convert it to a roman numeral.



Example 1:

Input: num = 3
Output: "III"
Example 2:

Input: num = 4
Output: "IV"
Example 3:

Input: num = 9
Output: "IX"
Example 4:

Input: num = 58
Output: "LVIII"
Explanation: L = 50, V = 5, III = 3.
Example 5:

Input: num = 1994
Output: "MCMXCIV"
Explanation: M = 1000, CM = 900, XC = 90 and IV = 4.


Constraints:

1 <= num <= 3999
 *
 *
 */