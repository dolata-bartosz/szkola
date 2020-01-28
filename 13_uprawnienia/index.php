<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Baza - uprawnienai</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <h3>Użytkownicy z tabeli user</h3>
    <?php
      require_once('./skrypty/connect.php');
      require_once('./skrypty/function.php');
      $sql =  "SELECT * FROM `user`";
      $result = mysqli_query($conn,$sql);
      echo<<<TABLE
      <table>
        <tr>
          <th>Imie</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
          <th>Rok</th>
        </tr>
TABLE;
        while($row = mysqli_fetch_assoc($result)){
          $year=year($row['bday']);
          echo<<<ROW
          <tr>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[bday]</td>
            <td>$year</td>
            <td><a href="./skrypty/del_user.php?id=$row[id]">Usuń</a></td>
ROW;
}
    echo  "</table>";
    echo "<h3>Dodawanie użytkownika</h3>";
     ?>
     <form action="./skrypty/add_user.php" method="post">
       <input type="text" name="name" placeholder="imie"><br><br>
       <input type="text" name="surname" placeholder="nazwisko"><br><br>
       <input type="date" name="age" placeholder="wiek"><br><br>
       <input type="submit" name="button" value="Dodaj użytkownika">
     </form>
  </body>
</html>
