<?php

use PHPUnit\Framework\TestCase;
use Validator\Constraints\RegExp;

class RegExpTest extends TestCase
{
	public function testConstructor()
	{
		$regExp = '/[0-9]+/';
		$constraint = new RegExp($regExp);
		$getInnerExp = function() {
			return $this->regExp;
		};
		$closure = $getInnerExp->bindTo($constraint, get_class($constraint));

		$this->assertEquals($regExp, $closure());
	}

	public function testValidate()
	{
		$pairs = [
			'/[0-9]+/' => 123,
			'/[^0-9]+/'=> 'abc'
		];

		foreach ($pairs as $regExp => $subject) {
			$constraint = new RegExp($regExp);
			$this->assertEquals($constraint->validate($subject), preg_match($regExp, $subject));
		}
	}
}