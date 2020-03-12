<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      table,th,td{
        border:1px solid blue;
        border-collapse: collapse;
      }
      td,th{
        width: 50px;
        height: 16px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <table>
      <th>id</th>
      <th>imie</th>
      <th>nazwisko</th>
      <th>data_urodzenia</th>
      <th>miasto</th>
      <th>DELETE</th>
      <th>UPDATE</th>

    <?php
    require("connect.php");
      $sql = "SELECT `student`.`id`, `name`, `surname`, `birthday`, `city` FROM `student` JOIN `city` ON student.city_id=city.id ORDER BY `student`.`id`";
      $result = mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($result)){
        echo "<tr><td>$row[id]</td><td>$row[name]</td><td>$row[surname]</td><td>$row[birthday]</td><td>$row[city]</td><td><a href='./del.php?id=$row[id]'>Usuń</a></td><td><a href='./?upd_id=$row[id]'>Aktualizuj</a></td></tr>";
      }
      echo "</table><hr>";
      echo <<< ADD
      <form  action="add_student.php" method="post">
        <input type="text" name="name" placeholder="imie"><br><br>
        <input type="text" name="surname" placeholder="nazwisko"><br><br>
        <input type="date" name="date"><br><br>
        <select name="city">
ADD;
        $sql = "SELECT * FROM `city`";
        $result = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
          echo "<option value='$row[id]'>$row[city]</option>";
        }
      echo<<<ADD
        </select><br><br>
        <input type="submit" name="btn" value="Dodaj">
      </form>
ADD;

     ?>

  </body>
</html>
