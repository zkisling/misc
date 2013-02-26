<?php

/**
* Zachary Kisling
* 2013
*
* Linked list with pop, print, push and bracket validate functions
*
*/

class Node
{
	public $data;
	public $next;

	public function __construct($data, $next = null)
	{
		$this->data = $data;
		$this->next = $next;
	}
}

class LinkedList
{
	protected $head = null;

	public function isEmpty()
	{
		return $this->head == null;
	}

	public function z_push($data)
	{
		$this->head = new Node($data, $this->head);
	}

	public function z_pop()
	{
		if ($this->head) {
			$value = $this->head->data;
			$this->head = $this->head->next;
			return $value;
		}
		return null;
	}
}

// Test me
$ll = new LinkedList();
$str = '[]{}(){';
$length = strlen($str);
		for ($i = 0; $i < $length; $i++) {
			$p = $str[$i];
			// If string starts with open brackets then push
			switch ($str[$i]) {
				case "[":
				case "(":
				case "{":
				case "<":
				$ll->z_push($str[$i]);
				break;
			// If string starts with closed brackets then pop
				case "]":
				case ")":
				case "}":
				case ">":
					// set popped node data to $chr
					$chr = $ll->z_pop();

					if (!($chr == '[' && $p == ']') &&
						!($chr == '(' && $p == ')') &&
						!($chr == '{' && $p == '}') &&
						!($chr == '<' && $p == '>')
					) {
						echo "Wrong \n";
						exit;
					}
					break;
				}
			}

		if (! $ll->isEmpty()) {
			echo "Wrong, there is a node left\n";
		} else {
			echo "Success\n";
		}



