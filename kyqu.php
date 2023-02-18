<?php
session_start();
if(isset($_SESSION['username'])){
  header("location:index.php");
}else{
  



?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kyqu</title>
    <link rel="stylesheet" href="./css/kyqu.css" />
  </head>
  <body>
  <nav>
        <!-- PJESA E NAVBAR-IT -->

        <ul class="navbar">
          <h1>ORTOMEDIKA</h1>

          <a href="./index.php"><img src="./img/home.png" /></a>
          <li><a href="./sherbimet.php">Shërbimet Mjeksore</a></li>
          <li><a href="./stafi.php">Stafi Mjekësor</a></li>
          <li><a href="./kontakti.php">Kontakti</a></li>
          <li><a href="./terminet.php">Terminet</a></li>
          <li id="kyqu"><a href="./kyqu.php">Kyqu</a></li>
        </ul>
      </nav>

    <div class="main-container">
      <div class="left-container">
        <!-- PJESA E PYETSORIT PER PERDORUESIN -->

        <form
          class="login_form"
          action="./index.html"
          method="post"
          name="form"
          onsubmit="return validated()"
        >

          <div class="font">Emri i Perdoruesit</div>
          <input autocomplete="off" type="text" name="name1" />
          <div id="name1_error">Ju lutem plotsoni emrin</div>

          <div class="font2">Fjalkalimi</div>
          <input type="password" name="password" />
          <div id="password_error">Ju lutem plotsoni fjalkalimin</div>

          <button type="submit">Kyqu</button>

          <a id="paragraph" href="./regjistrohu.php">Nuk keni llogari? </a>
        </form>
      </div>
    </div>

    <script src="./kyqu.js"></script>
  </body>
</html>


<?php

}

?>





