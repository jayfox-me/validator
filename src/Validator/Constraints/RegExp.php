<?php namespace Validator\Constraints;

class RegExp implements ConstraintInterface
{
	private $regExp;

	public function __construct(string $regExp)
	{
		$this->regExp = $regExp;
	}

	public function validate($value) : bool
	{
		return (bool)preg_match($this->regExp, $value);
	}

	public function getMessage() : string
	{
		return 'Введена некорректная строка';
	}
}