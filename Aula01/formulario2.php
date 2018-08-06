<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Area do Quadrado</title>
  </head>
  <body>
    <form action="#" method="post">
      <input type="text" name="aresta" value="">
      <input type="submit" name="enviar" value="enviar">
    </form>
    <p>
      <?php
        if(isset($_POST)){
          include 'action2.php';
        }
      ?>
    </p>
  </body>
</html>
