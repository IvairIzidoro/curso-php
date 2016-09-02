<?php 
  //Arquivo gerado por Ivair Izidoro
  define('PI','3.1415926536');

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Constantes</title>
  </head>
  <body>
      
    <form action="constante.php" method="post">
    <h2>Vamos Calcular a circunferência ??? <br></h2>
    <p>Por favor digite o valor do raio <input type="text" name="raio"><input type="submit" name="enviar" value="Calcular"></p>

    <?php 
      
      $raio = $_POST['raio'];

      $valorCircunferencia = 2 * PI * $raio;

      printf("O valor da circunferência é: %.2f", $valorCircunferencia);

    ?>
      


    </form>
  </body>
</html>
