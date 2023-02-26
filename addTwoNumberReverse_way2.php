<?php

/**
 *	ListNode class  
 */
class ListNode {
	public $val = 0;
	public $next = null;
	
	function __construct($val = 0, $next = null) {
		$this->val = $val;
		$this->next = $next;
	}
}

/**
 * Solution class
 */
class Soution
{
	
	function __construct(argument)
	{
		// code...
	}

	public function addTwoNumbers($l1, $l2)
	{
		$node = new ListNode();
		$root = $node;

		$carry = 0;
		$value = 0;

		while ($l1 || $l2 || $carry > 0) {
			$val1 = ($l1 === null) ? 0 : $l1->val;
			$val2 = ($l2 === null) ? 0 : $l2->val;
			$value = $val1 + $val2 + $carry;

			$carry = floor($value);
			$node->next = new ListNode($value % 10);

			if ($l1 != null) {
				$l1 = $l1->next;
			}
			if ($l2 != null) {
				$l2 = $l2->next;
			}

			$node = $node->next;
		}
		return $root->next;
	}
}