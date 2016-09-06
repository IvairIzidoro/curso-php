
<?php require_once('./config/db.php') ?>
<!DOCTYPE html>
<!-- Documento criado por Ivair Izidoro -->
<html lang="pt-br">

<head>
    <link href="https://fonts.googleapis.com/css?family=Lobster|Nunito|Prosto+One" rel="stylesheet">
	<meta charset="utf-8">
	<title>Lista de Tarefas</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>

	<h1>Lista de tarefas: Ivair</h1>

	<div class="formulario">
	
		<form class="formTarefa" action="saveTarefa.php" method="post">
			<label for="tarefa">Tarefa: </label>
				<input type="text" name="tarefa" id="tarefa">
				<input type="submit" name="enviar" value="Enviar">

		</form>
	</div>
	<div class="tarefas">
		<ul>
		<?php 

			$query = mysql_query("SELECT * FROM tarefas") or die (mysql_error());

			while($row = mysql_fetch_array($query, MYSQL_NUM)){
			
		 ?>
		

			<li>
				<span><?= $row['1']; ?></span>
				<a href="editar.php?id=<?= $row[0] ?>"  class="botao btn-success">Editar</a>
				<a href="excluir.php?id=<?= $row[0] ?>" class="botao btn-excluir">Remover</a>
			</li>

		<?php } ?>
		</ul>
		
	</div>

	




</body>
</html>