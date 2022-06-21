<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
	<p>Mostra a tabuada do numero.</p>
	<form action="" method="post">
		Numero: <input type="text" name="numero">
		<input type="submit" value="Calcular">
	</form>
	<br>
<?php
	if ($_POST){
		$x = $_POST['numero'];
		for ($i = 1; $i <= 10; $i++):
			$v = $x*$i;
			echo "$x x $i = $v <br>";
		endfor;
	}
?>
</body>
</html>