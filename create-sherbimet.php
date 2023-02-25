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
    <style>
      /* 
#82AAE3
#91D8E4
#BFEAF5
#EAFDFC */

html {
    scroll-behavior: smooth;
  }
  
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    background-color: #BFEAF5;
  }
  .navbar {
    z-index: 1;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    list-style-type: none;
    padding-right: 15px;
    padding-bottom: 5px;
    margin-bottom: 35px;
  }
  .navbar h1 {
    color: #82aae3;
    margin-right: 400px;
    /* margin-left: 50px; */
    font-family: "Poppins", sans-serif;
    font-size: 24px;
    font-weight: bold;
  }
  .navbar a img {
    padding-right: 15px;
    cursor: pointer;
    padding-bottom: 3px;
  }
  .navbar li a {
    text-decoration: none;
    color: black;
    font-size: 16px;
    /* padding-right: 25px; */
    font-weight: bold;
  }
  .navbar li a:hover {
    color: #82aae3;
    transition: 0.8s;
  }
  .navbar li::after {
    content: "";
    width: 0%;
    height: 2px;
    background: #82aae3;
    display: block;
    margin: auto;
    transition: 0.5s;
  }
  .navbar li:hover::after {
    width: 90%;
    margin-right: 30px;
  }
  .navbar li img {
    width: 70px;
  }
  #kyqu {
    background-color: #82aae3;
    border-radius: 20px;
    padding-left: 17px;
    padding-top: 7px;
    padding-bottom: 7px;
  }
  #kyqu:hover {
    color: #91d8e4;
    background-color: #91d8e4;
    transition: 0.8s;
  }






  .form {
    margin: 0 auto;
    width: 400px;
    background-color: white;
    padding: 10px;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  
  .form h3 {
    text-align: center;
    font-size: 24px;
    background-color: white;
    color: #82AAE3;
    margin-bottom: 20px;
  }
  
  .form div {
    display: flex;
    align-items: center;
    background-color: white;
    margin-bottom: 10px;
  }
  
  .form div img {
    width: 30px;
    background-color: white;
    margin-right: 10px;
  }
  
  .form input[type="text"],
  .form input[type="file"] {
    flex: 1;
    margin: 0;
    padding: 10px;
    border: none;
    border-radius: 5px;
    box-sizing: border-box;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    width: 270px;
  }
  
  .form input[type="submit"] {
    margin-top: 20px;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #82AAE3;
    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
  }
  
</style>
    <form method="POST" class="form">
        <h3>SHTO SHERBIMIN</h3>
        <br>
        <br>
        <div>
          <img src="./images/form-image-1.png" alt="">
          Foto:
          <input type="file" name="image" />
        </div>
        <br>
       <div>
          <img src="./images/form-image-2.png" alt="">
          Titulli:
          <input type="text" name="title" />
       </div>
        <br>
        <div>
          <img src="./images/form-image-3.png" alt="">
          Permbajtja:
          <input name="body" id="" type="text" name="title"></input>
        </div>
        <br>
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