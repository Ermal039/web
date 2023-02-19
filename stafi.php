
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stafi Mjeksore</title>
    <link rel="stylesheet" href="./css/stafi.css" />

    <style>
      .contain {
  max-width: 1170px;
  margin: auto;
  margin-left: 400px;
}
.row {
  display: flex;
  flex-wrap: wrap;
}
ul {
  list-style: none;
}

.footer {
  background-color: #BFEAF5;
  padding: 70px 0;
}
.footer-col {
  width: 25%;
  padding: 0 10px;
}
.footer-col h4 {
  font-size: 18px;
  color: black;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -10px;
  background-color: #82AAE3;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul li:not(:last-child) {
  margin-bottom: 10px;
}
.footer-col ul li a {
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: black;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li a:hover {
  color: #82AAE3;
  padding-left: 8px;
}
.footer-col .social-links a {
  padding-left: 5px;
}
#socials {
  padding-left: 30px;
}
.cnt {
  color: black;
}
.cards3{
  margin-bottom:130px;
}
    </style>

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
          <li><a href="./lokacionet.php">Lokacionet</a></li>
          <li id="kyqu"><a href="./kyqu.php">Kyqu</a></li>
        </ul>
      </nav>

    <!-- Rreshti i pare me staf -->
    <div class="cards1">
      <div class="card">
        <img src="./img/Dr.-Lindita-Çipi.jpg" alt="" />
        <p id="titulli">Dr. Lindita Çipi</p>
        <h4 id="nentitulli">Anasteziologe</h4>
      </div>

      <div class="card">
        <img src="./img/Dr.Gertiana-Mullalli.jpg" alt="" />
        <p id="titulli">Dr. Gertiana Mullalli Bime</p>
        <h4 id="nentitulli">Kardiokirurge</h4>
      </div>

      <div class="card">
        <img src="./img/Dr-Ana-Sula.jpg" alt="" />
        <p id="titulli">Dr. Ana Sula</p>
        <h4 id="nentitulli">Kardiologe</h4>
      </div>

      <div class="card">
        <img src="./img/Dr-Elton-Peci-1.jpg" alt="" />
        <p id="titulli">Dr. Elton N. Peçi</p>
        <h4 id="nentitulli">Optomatolog</h4>
      </div>
    </div>

    <!-- Rreshti i dyte me staf -->
    <div class="cards2">
      <div class="card">
        <img src="./img/Dr.-Dritan-Subashi.jpg" alt="" />
        <p id="titulli">Dr. Dritan Subashi</p>
        <h4 id="nentitulli">Stomatolog</h4>
      </div>

      <div class="card">
        <img src="./img/Dr.-Kadri-Venkatesh.jpg" alt="" />
        <p id="titulli">Dr. Kadri Venkatesh</p>
        <h4 id="nentitulli">Kardiolog</h4>
      </div>

      <div class="card">
        <img src="./img/Dr.Marco-Jakobbi.jpg" alt="" />
        <p id="titulli">Dr. Marco Jakobbi</p>
        <h4 id="nentitulli">Reumatolog</h4>
      </div>

      <div class="card">
        <img src="./img/Prof.-Dr.-Luan-Xhelilaj.jpg" alt="" />
        <p id="titulli">Dr. Luan Xhelilaj</p>
        <h4 id="nentitulli">Endokrinolog</h4>
      </div>
    </div>

    <!-- Rreshti i trete me staf -->
    <div class="cards3">
      <div class="card">
        <img src="./img/Dr.-Olsiva-Peçi.jpg" alt="" />
        <p id="titulli">Dr. Olsiva Peçi</p>
        <h4 id="nentitulli">Kirurge</h4>
      </div>

      <div class="card">
        <img src="./img/Dr-Fjorda-Tuka-1001x1001.jpg" alt="" />
        <p id="titulli">Dr. Fjorda Tuka</p>
        <h4 id="nentitulli">Stomatologe</h4>
      </div>

      <div class="card">
        <img src="./img/Dr-Esmeralda-Sera.jpg" alt="" />
        <p id="titulli">Dr. Esmeralda Sera</p>
        <h4 id="nentitulli">Ortopede</h4>
      </div>

      <div class="card">
        <img src="./img/Prof.-Dr.-Nestor-Thereska.jpg" alt="" />
        <p id="titulli">Prof. Dr. Nestor Thereska</p>
        <h4 id="nentitulli">Kardiolog</h4>
      </div>
    </div>


    <footer class="footer">
      <div class="contain">
        <div class="row">
          <div class="footer-col">
            <h4>ORTOMEDIKA</h4>
            <ul>
              <li><a href="./sherbimet.php">Sherbimet</a></li>
              <li><a href="./stafi.php">Stafi</a></li>
              <li><a href="./lokacionet.php">Lokacionet</a></li>
              <li><a href="./kyqu.php">Kyqu</a></li>
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
    
  </body>
</html>
