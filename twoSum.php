<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $result = [];
        $length = count($nums);

        for ($i = 0; $i < $length-1; $i++) {
            for ($j = $i + 1; $j < $length; $j++) {
		echo "i: " . $i . ", num[i] = " . $nums[$i] . "<br>";
		echo "j: " . $i . ", num[j] = " . $nums[$j] . "<br>";
		echo "total: " . ($nums[$i] + $nums[$j]) . ", type: " . gettype($target) . "<br>";

                if ((int)$nums[$i] + (int)$nums[$j] == (int)$target) {
                    $result[] = [$i, $j];
	        }
            }
        }
        return $result;
    }

}

$nums = [2,7,11,15];
$target = 9;
$solution = new Solution();
$aaa = $solution->twoSum($nums, $target);
var_dump( $aaa );


?>
