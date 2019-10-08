<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
      <input type="text" name="century" placeholder="podaj kraj">
      <input type="submit" value="wyślij">
    </form>
    <?php
      if(!empty($_GET['century'])){
        ob_clean();
        echo $_GET['century'];
      }
     ?>
  </body>
</html>
