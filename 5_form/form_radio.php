<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        if(!empty($_GET['country'])){
          $century = $_GET['country'];
          $lang = $_GET['lang'];

          switch ($lang) {
            case 'pl':
              $lang = "polski";
              break;

            case 'en':
              $lang = "angielski";
              break;
          }
          echo $century," ",$lang;
        }else{

        ?>
    <form method="get">
      <input type="text" name="country" placeholder="Podaj kraj" autofocus><br><br>
      <input type="radio" name="lang" value="pl" checked> polski
      <input type="radio" name="lang" value="en"> angielski <br><br>
      <input type="submit" name="button" value="Zatwierdź">

    </form>
    <?php
  }
?>
  </body>
</html>
