<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Area do Retangulo</title>
  </head>
  <body>
    <form action="#" method="post">
      <input type="text" name="peso" value="">
      <input type="text" name="altura" value="">
      <input type="submit" name="enviar" value="enviar">
    </form>
    <p>
      <?php
        if(isset($_POST)){
          require 'IMC.php';

          $imc1 = new IMC();
          $imc1->peso = $_POST['peso'];
          $imc1->altura = $_POST['altura'];

          echo $imc1->IMC() . '<br>';
          echo $imc1->calculaIMC();
        }
      ?>
    </p>
  </body>
</html>
