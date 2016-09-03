<?php 

/* *** Gerado por Ivair Izidoro *** */

//esta linha esta requerendo o aqruivo db.php 	
require_once('./config/db.php');

$tarefa = $_POST['tarefa']; // atribui a tarefa digitada para a variável $tarefa
$created = date("Y-m-d H:i:s"); //atribui a data de criação da tarefa
$updated = date("Y-m-d H:i:s"); // atribui a data de atualização da tarefa

//esta linha insere a tarefa no banco de dados
$insert = mysql_query("INSERT INTO  tarefas (tarefa, created_at,  updated_at) VALUES ('$tarefa', '$created', '$updated') ") or die (mysql_error());

echo "Inserido com sucesso";

?>