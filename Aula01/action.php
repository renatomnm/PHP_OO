<?php
  require 'retangulo.php';

  $x = $_POST['base'];
  $y = $_POST['altura'];

  $retangulo1 = new retangulo();
  $retangulo1->base = $x;
  $retangulo1->altura = $y;

  echo $retangulo1->area();
 ?>
