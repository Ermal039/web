<?php
session_start();
if(isset($_SESSION['username'])){
  header("location:index.php");
}else{
  



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyqu</title>
    <link rel="stylesheet" href="./css/kyqu.css">
</head>
<body>

    <nav>
        <div></div>
  
        <ul class="navbar">

          <h1>ORTOMEDIKA</h1>
          <a href="./index.php"><img src="./img/home.png" /></a>
          <li><a href="./sherbimet.php">Shërbimet Mjekësore</a></li>
          <li><a href="./stafi.php">Stafi Mjekësor</a></li>
          <li><a href="./kontakti.php">Kontakti</a></li>
          <li><a href="./lokacionet.php">Lokacionet</a></li>
          <li><a href="./terminet.php">Terminet</a></li>
          <li id="kyqu"><a href="./kyqu.php">Kyqu</a></li>
        </ul>
      </nav>



    <div class="main-container">

        <div class="left-container">

        <form action="kyquValidation.php" method="post" action >
                
                <div class="font">Emri i Perdoruesit </div>
                <input  type="text" name="username" >
               
    
                <div class="font2">Fjalkalimi</div>
                <input type="password" name="password">
               
                <input type="submit" value ="login" name= "loginBtn">
             
    
               <a  id="paragraph"  href="./insert.php">Nuk keni llogari? </a>
        
            </form>
        </div>
    
        
    </div>



    <script src="./js/kyqu.js"></script>
  </body>
</html>


<?php

}

?>



