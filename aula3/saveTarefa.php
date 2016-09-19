<?php 
/*
* Verificar erros no php
*/

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

/* *** Gerado por Ivair Izidoro *** */

//esta linha esta requerendo o aqruivo db.php 	
require_once('./config/db.php');

$resp = new stdclass();

try{
    
    $tarefa = $_POST['tarefa']; // atribui a tarefa digitada para a variável $tarefa
    $created = date("Y-m-d H:i:s"); //atribui a data de criação da tarefa
    $updated = date("Y-m-d H:i:s"); // atribui a data de atualização da tarefa
    
    if (empty($tarefa)) throw new Exception("Ops, você nao digitou nada! Digite uma nova tarefa!", 1);
    
    //esta linha insere a tarefa no banco de dados
    $insert = mysql_query("INSERT INTO  tarefas (tarefa, created_at,  updated_at) VALUES ('$tarefa', '$created', '$updated') ") or die (mysql_error());

    $resp->success = true;
    $resp->msg = "Tarefa inserida com sucesso!";
    $resp->location = 'index.php';
    
}catch (Exception $e){
    $resp->success = false;
    $resp->msg = $e->getMessage();
    
}

echo json_encode($resp, JSON_HEX_QUOT);



?>