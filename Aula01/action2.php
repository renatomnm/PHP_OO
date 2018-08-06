<?php
  require 'aresta.php';

  $z = $_POST['aresta'];

  $aresta1 = new Aresta();
  $aresta1->aresta = $z;

  echo $aresta1->area();
 ?>
