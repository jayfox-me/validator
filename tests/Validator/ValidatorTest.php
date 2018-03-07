<?php

use PHPUnit\Framework\TestCase;
use Validator\Validator;
use Validator\Constraints;

class ValidatorTest extends TestCase
{
	public function testSeveralConstrainsMatchAll()
	{
		$validator = new Validator;
		$result = $validator->validate('email@yandex.ru', [
			new Constraints\Email,
			new Constraints\RegExp("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/"),
		]);

		$this->assertTrue($result->isOk());
	}

	public function testSeveralConstrainsNotMatch()
	{
		$validator = new Validator;
		$result = $validator->validate(4, [
			new Constraints\RegExp("/[0-9]+/"),
			new Constraints\Fibonacci
		]);

		$this->assertFalse($result->isOk());
		$this->assertEquals(count($result->getErrors()), 1);
	}
}