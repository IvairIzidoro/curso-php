


<!DOCTYPE html>
<!-- Documento feito por Ivair Izidoro -->
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>IF ELSE</title>
</head>
<body>
	<form action="if.php" method="post">

		<p>Usando If e Else para verificar a idade de uma pessoa<br></p>

		<p>Digite sua idade: <input type="text"  name="idade" maxlength="3" > <input type="submit" name="enviarIdade" value="Enviar" ></p>

	</form>
<?php
	
	$idade = $_POST['idade'];

	if (( $idade >= 0 ) && ( $idade <= 12)) {

		echo "Voce tem $idade anos de idade e é uma criança ainda";

	}
	else if (($idade >= 13) && ($idade <=17)){

		echo "Voce tem $idade anos de idade e é um adolescente";

	}
	else {

		echo "Voce tem $idade anos de idade e é um adulto";
	}

	
?>

</body>
</html>