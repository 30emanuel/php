<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
	<p>Verificar se o numero é positivo ou negativo.</p>
	<form action="" method="post">
		Numero: <input type="text" name="numero">
		<input type="submit" value="Verificar">
	</form>
<?php
	if ($_POST){
	$numero = $_POST['numero'];
		if ($numero > 0){
		echo "O numero é positivo!";
		}
		elseif ($numero < 0){
		echo "O numero é negativo!";
		}
		else{
		echo "O numero é igual a 0!";
		}
	}
?>
</body>
</html>