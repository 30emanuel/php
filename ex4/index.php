<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>
	<p>Calculadora.</p>
	<form action="" method="post">
		Primeiro numero: <input type="text" name="num1"><br>
		Segundo numero:  <input type="text" name="num2"><br>
		<input type="submit" name="operacao" value="+">
		<input type="submit" name="operacao" value="-">
		<input type="submit" name="operacao" value="*">
		<input type="submit" name="operacao" value="/">
	</form>
	<br>
<?php
	$a = $_POST['num1'];
	$b = $_POST['num2'];
	$op = $_POST['operacao'];

	if (!empty($op)){
		if($op == '+'){
			$c = $a + $b;
		}
		else if($op == '-'){
			$c = $a - $b;
		}
		else if($op == '*'){
			$c = $a * $b;
		}
		else{
			$c = $a / $b;
		}

		echo "O resultado é $c";
	}
?>
</body>
</html>