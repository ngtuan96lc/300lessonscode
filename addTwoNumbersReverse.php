<?php

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        # reversion $l1
        $revL1 = '';
        if (count($l1) <= 1) {
            $revL1 = $l1[0];
        } else {
            for ($i = count($l1) - 1; $i >= 0; $i--) {
                $revL1 .= $l1[$i];
            }
        }

        # resersion $l2
        $revL2 = '';
        if (count($l2) <= 1) {
            $revL2 = $l2[0];
        } else {
            for ($i = count($l2) - 1; $i >= 0; $i--) {
                $revL2 .= $l2[$i];
            }
        }

	    $total = (int)$revL1 + (int)$revL2;

        $result = [];

        $total = strrev((string)$total);
        foreach (str_split($total) as $key => $value) {
            $result[] = $value;
        }

        return $result;

    }
}

$l1 = [2, 4, 3];
$l2 = [5, 6, 4];

$solution = new Solution();
$total = $solution->addTwoNumbers($l1, $l2);

var_dump($total);

