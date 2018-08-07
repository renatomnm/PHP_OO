<?php 
	require "conversor.php";
	require "dollar.php";

	$valorDoFormulario = $_POST['quantidadeDeDolares'];

	$dolares = new Dollar();
	$dolares->quantia = $valorDoFormulario;
	$converteDolares = new Conversor(3.5);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>conversor</title>
  </head>
  <body>
    <form action="#" method="post">
      <input type="text" name="quantidadeDeDolares" value="">
      <input type="submit" name="enviar" value="enviar">
    </form>
    <p>
      <?php
      	echo $converteDolares->fazConversaoDolaresParaReais($dolares->quantia);
      ?>
    </p>
  </body>
</html>
