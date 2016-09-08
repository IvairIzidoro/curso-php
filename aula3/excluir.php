<?php 
//Documento gerado por Ivair Izidoro
	require_once('./config/db.php');

	$id = $_GET['id'];
	$excluir = mysql_query(" DELETE FROM  tarefas WHERE id = $id ")or die (mysql_error());


	header("Location: index.php");





 ?>