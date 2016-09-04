<?php  
//Documento criado por Ivair Izidoro
require_once('./config/db.php');

$id = $_GET['id'];

$query = mysql_query(" SELECT * FROM tarefas WHERE id = $id " ) or die (mysql_error());
$result = mysql_fetch_array($query);

 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<title>Tarefa: <?= $result['tarefa']?></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>

	<h1>Tarefa: <?= $result['tarefa']?></h1>

	<div class="formulario">
	
		<form class="formTarefa" action="updateTarefa.php" method="post">
			<label for="tarefa">Tarefa</label>
				<input type="hidden" name="id" value="<?= $result['id']?>" >
				<input type="text" name="tarefa" id="tarefa" value="<?= $result['tarefa']?>">
				<input type="submit" name="enviar" value="Enviar">

		</form>
	</div>
</body>
</html>

