<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
	<p>Verifica se voce é maior de idade.</p>
	<form action="" method="post">
		Nome: <input type="text" name="nome"><br>
		Idade: <input type="text" name="idade">
		<input type="submit" value="Verificar">
	</form>
<?php
	if($_POST){
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
		if($idade > 18){
			echo "$nome é maior de 18 e tem $idade anos.";
		}
		else{
			echo "$nome não é maior de 18 e tem $idade anos.";
		}
	}
?>
</body>
</html>