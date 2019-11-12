
<?php
  setcookie("surname", "Nowak");
  // usuwanie
  //setcookie("surname", "", time());

  //setcookie("age", 20, time()+10);
  if(isset($_COOKIE["surname"])){
      echo $_COOKIE["surname"];
  } else {
    ?>
      <script type="text/javascript">
        location.reload();
      </script>
<?php } ?>
