<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <form action="" method="post">
		Fatorial de: <input type="text" name="num">
		<input type="submit" name="exibir"><br><br>
	</form>
<?php
	if($_POST){
	$fat = $_POST['num'];
	$resultado = 1;
	echo "$fat! = ";

	for($i = $fat; $i > 1; $i--){
		$resultado *= $fat; 
		echo "$fat x ";
		$fat--;
	}

	echo "1 = $resultado";
	}
?>

</body>
</html>