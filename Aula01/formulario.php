<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Area do Retangulo</title>
  </head>
  <body>
    <form action="#" method="post">
      <input type="text" name="base" value="">
      <input type="text" name="altura" value="">
      <input type="submit" name="enviar" value="enviar">
    </form>
    <p>
      <?php
        if(isset($_POST)){
          include 'action.php';
        }
      ?>
    </p>
  </body>
</html>
