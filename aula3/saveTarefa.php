<?php 

/* *** Gerado por Ivair Izidoro *** */

//esta linha esta requerendo o aqruivo db.php 	
require_once('./config/db.php');

$resp = new stdclass();

try{
    
    $tarefa = $_POST['tarefa']; // atribui a tarefa digitada para a variável $tarefa
    $created = date("Y-m-d H:i:s"); //atribui a data de criação da tarefa
    $updated = date("Y-m-d H:i:s"); // atribui a data de atualização da tarefa
    
    if (empty($tarefas)) throw new Exception("O campo tarefa esta vazio, insira algo!", '');
    
    //esta linha insere a tarefa no banco de dados
    $insert = mysql_query("INSERT INTO  tarefas (tarefa, created_at,  updated_at) VALUES ('$tarefa', '$created', '$updated') ") or die (mysql_error());

    
    $resp->SUCCESS = true;
    $resp->msg = "Tarefa inserida com sucesso";
    
}catch (Exception $e){
    $resp->SUCCESS = false;
    $resp->msg = $e->getMessage();
    
}



//header("Location: index.php");

?>