<?php namespace Validator\Constraints;

/**
 * Проверка чисел Фибоначчи
 */
class Fibonacci implements ConstraintInterface
{
	const COMPUTED_COUNT = 45;
	/**
	 * @var array
	 */
	private $numbers;

	/**
	 * Валидация
	 * @param integer $value 
	 * @return bool
	 */
	public function validate($value) : bool
	{
		return in_array($value, $this->getNumbers());
	}

	/**
	 * Получить текст ошибки
	 * @return string
	 */
	public function getMessage() : string
	{
		return 'Введено некорректное число Фибоначчи';
	}

	/**
	 * Получить COMPUTED_COUNT чисел Фибоначчи
	 * @return array
	 */
	protected function getNumbers() : array
	{
		if (!isset($this->numbers))	{
			for ($i = 0; $i < self::COMPUTED_COUNT; $i++) {
				if ($i < 2) {
					$this->numbers[] = 1;
				}
				else {
					$this->numbers[] = $this->numbers[count($this->numbers) - 1] +
						$this->numbers[count($this->numbers) - 2];
				}
			}
		}

		return $this->numbers;
	}
}