<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
	<p>Descobre se o numero é par ou impar</p>
	<form action="" method="post">
		Numero: <input type="text" name="numero">
		<input type="submit" value="Verificar">
	</form>
<?php
	if($_POST){
	$x = $_POST['numero'];
		if ($x % 2 == 0 ){
		echo "O numero $x é PAR";
		}
		else{
		echo "O numero $x é IMPAR";
		}
	
	}
?>
</body>
</html>