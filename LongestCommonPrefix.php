<?php

declare(strict_types=1);

// Write a function to fiind the longest common prefix amongst an array of strings.
// if there is no common prefix, return an empty string "".
class Solution {

	public function longestCommonPrefix ($strs)
	{
		$strsSorted = sort($strs);
		$size = count($strsSorted);

		$firstItem = $strsSorted[0];
		$lastItem = $strsSorted[$size - 1];
		$answer = "";

		for ($i = 0; $i < strlen($firstItem); $i++) {
			if ($firstItem[$i] == $lastItem[$i]) {
				$answer .= $firstItem[$i];
			} else {
				break;
			}
		}

		return $answer;
	}
}

?>
