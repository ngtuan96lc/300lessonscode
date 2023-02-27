<?php

/*
* Given an integer x, return true if x is a palindrome, and false otherwise.
*/

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $x = (string)$x;
        $count = strlen($x);

        $result = true;
        for ($i = 0; $i <= $count/2; $i++) {
            if ($x[$i] == $x[$count - $i - 1]) {
                continue;
            } else {
                $result = false;
                break;
            }
        }
        return $result;
    }
}