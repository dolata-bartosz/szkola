<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      if(!empty($_GET['century']) && isset($_GET['button'])){
        echo $_GET['century'];
      }else {
        ?>
        <form method="get">
          <input type="text" name="century" placeholder="podaj kraj">
          <input type="submit" name="button" value="wyślij">
        </form>
      <?php
      }
     ?>
  </body>
</html>
