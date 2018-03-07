<?php

use PHPUnit\Framework\TestCase;
use Validator\Constraints\Fibonacci;

class FibonacciTest extends TestCase
{
	public function testValidate()
	{
		$pairs = [
			[-1, false],
			[1, true],
			[2, true],
			[4, false]
		];

		foreach ($pairs as $number => $result) {
			$constraint = new Fibonacci;
			$this->assertEquals($constraint->validate($number), $result);
		}
	}
}