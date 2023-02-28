<?php

/**
* Given a roman numeral, convert it to an integer.
* Test Cases: "III", "LVIII", "MCMXCIV"
*/

/*
* This is the first way which I found out
*/
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $result = 0;
        $symbols = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000
        ];
        $specialSymbols = [
            "IV" => 4,
            "IX" => 9,
            "XL" => 40,
            "XC" => 90,
            "CD" => 400,
            "CM" => 900
        ];
        $specialKeys = array_keys($specialSymbols);

        $ignoreNextStep = false;
        for ($i = 0; $i < strlen($s); $i++) {
            if ($ignoreNextStep) {
                $ignoreNextStep = false;
                continue;
            }

            $amount = $symbols[$s[$i]];

            if ($i + 1 < strlen($s)) {
                $tempKey = $s[$i] . $s[$i+1];
                if (in_array($tempKey, $specialKeys)) {
                    $ignoreNextStep = true;
                    $amount = $specialSymbols[$tempKey];
                }
            }

            $result += $amount;
        }

        if ($result < 1 || $result > 3999) {
            $result = -1;
        }
        return $result;
    }
}

