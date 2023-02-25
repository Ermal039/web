<?php
require_once ('sherbimetController.php');

$sherbimet = new sherbimi();
if(isset($_POST['submit'])){
    $sherbimet->insert($_POST);
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/create-sherbimet.css">
  </head>
  <body>
    <nav>
      <!-- PJESA E NAVBAR-IT -->

      <ul class="navbar">
        <h1>ORTOMEDIKA</h1>

        <a href="./index.php"><img src="./images/home.png" /></a>
        <!-- <li><a href="./sherbimet.php">Shërbimet Mjeksore</a></li>
          <li><a href="./stafi.php">Stafi Mjekësor</a></li>
          <li><a href="./kontakti.php">Kontakti</a></li>
          <li><a href="./lokacionet.php">Lokacionet</a></li>
          <li id="kyqu"><a href="./kyqu.php">Kyqu</a></li> -->

        <li><a href="./menuDashboard.php">DASHBOARD</a></li>
        <li><a href="">LOGOUT</a></li>
      </ul>
    </nav>
    <br>
    <br>

    <form method="POST" class="form">
        <h3>SHTO SHERBIMIN</h3>
        <br>
        <br>
        <div>
          <img src="./images/form-image-1.png" alt="">
          <input type="file" name="image" />
        </div>
        <br>
       <div>
          <img src="./images/form-image-2.png" alt="">
          <input type="text" name="title" />
       </div>
        <br>
        <div>
          <img src="./images/form-image-3.png" alt="">
          <input name="body" id="" type="text" name="title"></input>
        </div>
        <br>
        <input type="submit" name="submit" value="RUAJ" />
</form>


  </body>
</html>

<!-- 

        Foto:
        <input type="file" name="image" />
        <br />
        Titulli:
        <input type="text" name="title" />
        <br />
        Permbajtja:
        <textarea name="body" id="" cols="30" rows="10"></textarea>
        <br />
        <input type="submit" name="submit" value="Save" /> -->