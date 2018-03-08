<?php

use PHPUnit\Framework\TestCase;
use Validator\Constraints\Email;

class EmailTest extends TestCase
{
	public function testValidate()
	{
		$pairs = [
			'mail@yandex.ru' => true,
			'@localhost' => false
		];

		foreach ($pairs as $email => $result) {
			$constraint = new Email;
			$this->assertEquals($constraint->validate($email), $result);
		}
	}
}