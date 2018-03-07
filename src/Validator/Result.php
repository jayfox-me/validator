<?php namespace Validator;

/**
 * Результат валидации
 */
class Result
{
	/**
	 * @var array
	 */
	private $errors = [];

	/**
	 * Вернуть наличие ошибок валидации
	 * @return bool
	 */
	public function isOk() : bool
	{
		return empty($this->errors);
	}

	/**
	 * Добавить ошибку
	 * @param string $errorText 
	 * @return void
	 */
	public function addError(string $errorText)
	{
		$this->errors[] = $errorText;
	}

	/**
	 * Получить ошибки
	 * @return array
	 */
	public function getErrors() : array
	{
		return $this->errors;
	}
}