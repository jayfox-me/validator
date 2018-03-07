<?php namespace Validator\Constraints;

/**
 * Интерфейс для проверки валидации
 */
interface ConstraintInterface
{
	public function validate($value) : bool;
	public function getMessage() : string;
}