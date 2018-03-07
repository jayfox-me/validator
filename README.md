# validator
## Пример использованя
```
<?php
require('src/autoload.php');
$validator = new Validator\Validator;
$result = $validator->validate('email@yandex.ru', [
	new Validator\Constraints\Email,
	new Validator\Constraints\RegExp("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/"),
]);
?>
```
