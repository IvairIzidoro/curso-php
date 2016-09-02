<?php

/* codificado por ivair izidoro */
$numeros = 10;
$valor = 0;
//vamos nos divertir com o laço de repetição for

//INCREMENTA
for ($i= 0; $i < $numeros; $i++) {//CURIOSIDADE a variavel $i ela so pode ser usada dentro do laço for

	if ($i < 10){ // usando um if else para gerar uma formatação mais amigavel na tela

  		$valor++;
   		echo "0" . $i . " + 1 = " . $valor . "<br>";	
  
  	}else{

  		$valor++;
  		echo $i . " + 1 = " . $valor . "<br>";
  
  	}
  
}

echo "<br><br>";
//DECREMENTA
//Neste caso abaixo a mesma ideia com alguns ajustes para fazer as continhas na tela
//neste loop tbm so da certo pq no loop acima a variavel $valor termina com o valor 10 por isso ele gera o decremento corretamente
//caso nao fosse usado o laço acima resolveriamos usando $valor = $numeros;
for ($i=1; $i <= $numeros; $numeros--) {
  
	if ($numeros < 10){ // usando um if else para gerar uma formatação mais amigavel na tela

	  	$valor--;
	   	echo "0" . $numeros. " - 1 = " . $valor . "<br>";	
	  
	}else{

	  	$valor--;
	  	echo $numeros . " - 1 = " . $valor . "<br>";
	  
	}
	  
}

