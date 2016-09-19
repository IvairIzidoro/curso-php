<?php
/* Arquivo Criado por Ivair Izidoro
 *
 * Estamos refatorando o código para usar o Mysqli que é a versão que esta em vigor no momento para
 * utilizar no MySQL.
 *
**/


$DB_usuario = 'root';
$DB_senha = '';
$DB_host = 'localhost';
$DB_banco = 'cursophp';


@$connection = new Mysqli ($DB_host, $DB_usuario, $DB_senha, $DB_banco) or die (mysql_error());

if(mysqli_connect_errno()){
    
    echo "Erro ao conectar: (". $connection->connect_errno . ") - " . $connection->connect_error;
}

$sql = "SELECT * FROM tarefas";

$query = $connection->query($sql);

while($data = $query->fetch_assoc()){
    
    echo "ID: " . $data['id'] . "<br>";
    echo "TAREFA: " . $data['tarefa'] . "<br><hr>";
}

while ($tarefa = $query->fetch_object()){
    
    $linha[] = $tarefa;
    
    foreach($linha as $valor){
        echo "tarefa: " . $valor->tarefa . "<br>";
    }
}



/*
 * esta maneira abaixo de criar uma conexão com o MySQL embora ainda funcione está descontinuado
 *
 
// setando as configurações do banco de dados para variáveis
$usuario = 'root';
$senha = '';
$host = 'localhost';
$banco = 'cursophp';

//abrindo uma conexão com o banco de dados
$conexao = mysql_connect($host, $usuario, $senha) or die(mysql_error());

//selecionando o banco de dados a ser trabalhado
$selctDB = mysql_select_db($banco) or die (mysql_error());

*/

 ?>