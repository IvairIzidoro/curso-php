<?php 

/* *** Gerado por Ivair Izidoro *** */

//esta linha esta requerendo o aqruivo db.php 	
require_once('./config/db.php');


$id = $_POST['id'];//atribui o id que será atualizado
$tarefa = $_POST['tarefa']; // atribui a tarefa digitada para a variável $tarefa
$updated = date("Y-m-d H:i:s"); // atribui a data de atualização da tarefa

//esta linha atualiza a tarefa no banco de dados
$insert = mysql_query("UPDATE tarefas SET tarefa = '$tarefa', updated_at = '$updated' WHERE id = '$id'") or die (mysql_error());

header("Location: index.php");

?>