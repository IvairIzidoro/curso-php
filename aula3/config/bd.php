<?php 

// setando as configurações do banco de dados para variáveis
$usuario = 'root';
$senha = '';
$host = 'localhost';
$banco = 'cursophp';

//abrindo uma conexão com o banco de dados
$conexao = mysql_connect($host,$usuario,$senha) or die(mysql_error());

//selecionando o banco de dados a ser trabalhado
$selctDB = mysql_select_db($banco) or die (mysql_error());

 
 ?>