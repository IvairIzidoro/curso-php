<?php
/* Ivair Izidoro */


//Declaração de variáveis Globais
$inteiro = 56;
$float = 5.6;
$string = "5.6";
$boolean = TRUE;
$array = array("Ivair ", "Izidoro", "Nascimento", "Pereira");

//criando uma classe chamada nome.
class Nome
{

}


// a linha abaixo esta instanciando um objeto 
$objeto = new Nome; 


//verificando o tipo das variáveis 
echo "<br>" . gettype($objeto) . " = Objeto"; //$objeto é uma variável do tipo nome
echo "<br>" . gettype($inteiro) . " = Inteiro"; //$inteiro e uma variável que tem como conteudo um numero inteiro
echo "<br>" . gettype($float) . " = Float ou Double"; //$float é uma variavel que contem numeros com casas decimais 5.25 por exemplo
echo "<br>" . gettype($string) . " = String"; //$string como no exemplo foi colocado 5.6 entre aspas duplas significa que seu conteúdo sera interpretado como uma sequencia de caracteres e nao um numero.
echo "<br>" . gettype($boolean) . " = Booleano"; // $boolean é uma variavel que pode retornar apenas 2 valores TRUE ou FALSE muito usado para fazer algumas verificações
echo "<br>" . gettype($array) . " = array ou vetor"; // um array é um conjunto de instruções e pode ser também multidimensional chamado de Matriz

//com estas 3 linhas abaixo conseguimos visualizar o conteudo e a posição no array que se encontra cada string
echo "<pre>";
print_r($array);
echo "</pre>";

?>