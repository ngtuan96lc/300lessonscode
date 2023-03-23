<?php

/**
* @param String $str
* @return Boolean
*/
class Solution {

    /**
    * @param String $str
    * @return Boolean
    */
    function isValid($str) {
        $length = strlen($str);
        $stack = [];

        for ($i = 0; $i <= $length - 1; $i++) {
            // if open bracket then push it into stack
            if (in_array($str[$i], ["(", "{", "["])) {
                $stack[] = $str[$i];
            } else {
                // if close bracket then compare with the top of stack
                // there are 2 cases:
                // the stack can be empty or not empty
                if (!empty($stack)) {
                    if (
                        $str[$i] == ')' && $stack[count($stack) - 1] == '(' ||
                        $str[$i] == '}' && $stack[count($stack) - 1] == '{' ||
                        $str[$i] == ']' && $stack[count($stack) - 1] == '['
                    ) {
                        // if matches then remove top of stack
                        array_pop($stack);
                    } else {
                        // if not match then return false
                        return false;
                    }
                } else {
                    // if stack is empty and getting a close bracket, that means the str is unbalanced
                    return false;
                }
            }
        }

        // in the end if stack is empty,
        // that means all opening brackets have found their corresponding closing bracket
        // and have been popped then we return trie
        if (empty($stack)) {
            return true;
        }

        return false;
    }
}


?>
