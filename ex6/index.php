<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
	<p>Descobre qual numero é maior.</p>
	<form action="" method="post">
		Numero A: <input type="text" name="num1"><br>
		Numero B: <input type="text" name="num2">
		<input type="submit" value="Verificar">
	</form>
<?php
	if($_POST){
	$a = $_POST['num1'];
	$b = $_POST['num2'];
		if($a > $b){
			echo "O numero A ($a) é maior que o numero B ($b)";
		}
		else{
			echo "O numero B ($b) é maior que o numero A ($a)";
		}
	}
?>
</body>
</html>