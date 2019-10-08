<!--
  Użytkownik podaje dane z klawiatury w polach:
  textarea, text oraz number.
  Wyczyść dane z białych znaków.
  Ogranicz pole text area do 50 znaków.
  Wyświetl dane z textarea zwracjać uwagę na znaki break
  Formularz dodaj z drugiego pliku o nazwie form.php -->
  <!DOCTYPE html>
  <html lang="pl" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <?php
      include 'form_zad.php';
      if(!empty($_POST['text']) && !empty($_POST['text_2']) && !empty($_POST['num'])){
        $area = $_POST['text'];
        $text = $_POST['text_2'];
        $number = $_POST['num'];
        $newarea = trim($area);
        $newtext = trim($text);
        $newnumber = trim($number);
        $newarea = substr($newarea,0,50);
        echo nl2br($newarea).'<br>';
        echo nl2br($newtext).'<br>';
        echo $number.'<br>';
      }
       ?>
    </body>
  </html>
