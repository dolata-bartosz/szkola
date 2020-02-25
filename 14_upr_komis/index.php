<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Baza - uprawnienaia- Zadanko</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <h3>Użytkownicy z tabeli user</h3>
    <?php
      require_once('./skrypty/connect.php');
      require_once('./skrypty/function.php');
      $sql =  "SELECT * FROM `user` LEFT JOIN `color` ON user.color=color.id_color";
      $result = mysqli_query($conn,$sql);
      echo<<<TABLE
      <table>
        <tr>
          <th>Imie</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
          <th>Rok</th>
          <th>Kolor</th>
          <th>Usuwanie</th>
          <th>Aktualizacja</th>

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
            <td>$row[color]</td>
            <td><a href="./skrypty/del_user.php?id=$row[id]">Usuń</a></td>
            <td><a href="./?update_id=$row[id]">Aktualizuj</a></td>
ROW;
}
echo "</table><br>";
echo '<form method=get><input type="submit" name="btn" value="Dodaj"></form>';


     if (isset($_GET['update_id'])) {
       $id = $_GET['update_id'];
       $sql = "SELECT * FROM `user` LEFT JOIN `color` ON user.color=color.id_color WHERE `id`=$id";
       $result = mysqli_query($conn,$sql);
       $user = mysqli_fetch_assoc($result);
       $age = $user['bday'];
       $name = $user['name'];
       $surname = $user['surname'];
       $colorid = $user['id_color'];
       echo <<<FORMUPDATE
       <hr><h3>Aktualizuj użytkownika</h3>
       <form action="./skrypty/update_usr.php" method="post">
         <input type="text" name="name" value="$name"><br><br>
         <input type="text" name="surname" value="$surname"><br><br>
         <input type="date" name="age" value="$age"><br><br>
         <select name="color">
FORMUPDATE;
          $sql="SELECT * FROM color";
          $result = mysqli_query($conn, $sql);
          while($color = mysqli_fetch_assoc($result)){
            if($color['id_color']==$colorid){
              echo "<option value=",$color['id_color']," selected>",$color['color'],"</option>";
            }else{
              echo "<option value=",$color['id_color'],">",$color['color'],"</option>";
            }

          }
  echo<<<FORMUPDATE
          </select><br><br>
         <input type="submit" name="button" value="Aktualizuj">
         <input type="hidden" name="id" value="$id">
       </form>
FORMUPDATE;
}
if(isset($_GET["btn"])){
  echo<<<ADDUSER
  <hr>
 <h3>Dodawanie użytkownika</h3>
 <form action="./skrypty/add_user.php" method="post">
   <input type="text" name="name" placeholder="imie"><br><br>
   <input type="text" name="surname" placeholder="nazwisko"><br><br>
   <input type="date" name="age" placeholder="wiek"><br><br>
   <select name="color">
ADDUSER;
       $sql="SELECT * FROM color";
       $result = mysqli_query($conn, $sql);
       while($color = mysqli_fetch_assoc($result)){
         echo "<option value=",$color['id_color'],">",$color['color'],"</option>";
       }
       echo<<<ADDUSER
       </select><br><br>
        <input type="submit" name="button" value="Dodaj użytkownika">
       </form>
ADDUSER;
}
?>
</body>
</html>
