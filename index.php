<?php
session_start();
$hide="";
if(!isset($_SESSION['username'])){
    header("location:kyqu.php");
}else{
    if($_SESSION['role'] == "admin"){
        $hide="";
    }else{
        $hide="hide";
    }

?>


   
           
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ORTOMEDIKA</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <script defer src="./script.js"></script>
  </head>
  <body>
    <header>
    
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
          <a href="logout.php">LogOut</a>
         <a href="dashboard.php" class="<?=$hide?>">Dashboard</a>
        </ul>
      </nav>
      <!-- PJESA E TEKSTIT-IT -->

      <section>
        <p id="text"></p>
      </section>

      <a id="butoni" href="#fullpage">Vazhdoni</a>
    </header>

    <main>
      <div class="fullpage" id="fullpage">
        <!-- PJESA E SHERBIMEVE -->

        <div class="upper">
          <div class="upper-left">
            <div>
              <img src="./img/ambulance.png" />
            </div>

            <div class="text-area">
              <h3>Urgjenca</h3>
              <p>
                Urgjenca e Spitalit ofron shërbimin të specializuar dhe në kohën
                e duhur për pacientet. Menaxhon me sukses të gjitha rastet që
                paraqiten duke e bërë këtë shërbim një shtyllë kryesore dhe
                trajtimit të emergjencave me një numër të lartë rastesh.
              </p>
            </div>
          </div>

          <div class="upper-right">
            <div>
              <img src="./img/doctor.png" />
            </div>

            <div class="text-area">
              <h3>Stafi Mjekësor</h3>
              <p>
                Stafi Mjekësor në Spitalin tonë përbehet nga mjekë shqiptarë dhe
                të huaj me edukim të universiteteteve më të njohura, si dhe me
                një eksperiencë të gjatë dhe shumëvjeqare.
              </p>
            </div>
          </div>
        </div>

        <div class="lower">
          <div class="lower-left">
            <div>
              <img src="./img/Sherbimi Mjeksor.png" />
            </div>

            <div class="text-area">
              <h3>Shërbimet Mjekësore</h3>
              <p>
                Spitali ynë ofron shërbime mjekësore të ndryshme varësisht nga
                nevoja e pacienteve, duke iu siguruar shërimë dhe ndihmë të
                sigurtë.
              </p>
            </div>
          </div>

          <div class="lower-right">
            <div>
              <img src="./img/24-hours.png" />
            </div>

            <div class="text-area">
              <h3>24/7</h3>
              <p>
                Kujdesi Maksimal për pacientët e hospitalizuar, mbikqyrje të
                vazhdueshme nga Doktorët kujdestarë dhe stafi përcjellës për të
                gjithë pacientët.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="main-img">
        <img src="./img/d.png" />
      </div>
    </main>
    <!-- PJESA E LOKACIONEVE -->
    

    <div class="container">
      <h1>Lokacionet tona!</h1>
       <div class="slider">
       <img src="" id="image" alt="">
        </div>
         </div>
      <script src="slider.js"></script>
    
    
    <!-- PJESA E FOOTER-IT -->

    <footer class="footer">
      <div class="contain">
        <div class="row">
          <div class="footer-col">
            <h4>ORTOMEDIKA</h4>
            <ul>
              <li><a href="./sherbimet.html">Sherbimet</a></li>
              <li><a href="./stafi.html">Stafi</a></li>
              <li><a href="./terminet.html">Terminet</a></li>
              <li><a href="./kyqu.html">Kyqu</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Na Kontaktoni</h4>
            <ul class="cnt">
              <li>+383 44 123 456</li>
              <li>+383 49 123 456</li>
              <li>spitaliortomedika@hotmail.com</li>
              <li>Prishtinë</li>
            </ul>
          </div>
          <div class="footer-col" id="socials">
            <h4>Social Media</h4>
            <div class="social-links">
              <a href="#"><img src="./img/twitter - contact form.png" /></a>
              <a href="#"><img src="./img/facebook-contact form.png" /></a>
              <a href="#"><img src="./img/instagram - contact form.png" /></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

      <style>
  .hide{
    display:none;
  }


</style>
  </head>
 

             
  </body>
</html>


<?php

}

?>