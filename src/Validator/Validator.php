<?php namespace Validator;

use Validator\Constraints\ConstraintInterface;

/**
 * Валидатор данных
 */
class Validator
{
	/**
	 * Валидация входного параметра
	 * @param mixed $value 
	 * @param array $constraints 
	 * @return \Validator\Result
	 */
	public function validate($value, array $constraints) : Result
	{
		$result = new Result;

		foreach ($constraints as $constraint) {
			if ($constraint instanceof ConstraintInterface && !$constraint->validate($value)) {
				$result->addError($constraint->getMessage());
			}
		}

		return $result;
	}
}