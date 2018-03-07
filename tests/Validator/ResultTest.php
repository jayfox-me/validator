<?php

use PHPUnit\Framework\TestCase;
use Validator\Result;

class ResultTest extends TestCase
{
	public function testEmptyIsOk()
	{
		$result = new Result;
		$this->assertTrue($result->isOk());
	}

	public function testError()
	{
		$result = new Result;
		$result->addError('some error');
		$this->assertFalse($result->isOk());
	}

	public function testErrorSet()
	{
		$errors = ['a', 'b', 'c'];
		
		$result = new Result;

		foreach ($errors as $error) {
			$result->addError($error);
		}

		$this->assertEquals($result->getErrors(), $errors);
	}
}