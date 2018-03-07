<?php namespace Validator\Constraints;

/**
 * Валидация на email
 */
class Email implements ConstraintInterface
{
	/**
	 * Валидация
	 * @param sttring $value 
	 * @return booll
	 */
	public function validate($value) : bool
	{
		return !empty(filter_var($value, FILTER_VALIDATE_EMAIL));
	}

	/**
	 * Получить текст ошибки
	 * @return string
	 */
	public function getMessage() : string
	{
		return 'Введен некорректный email';
	}
}