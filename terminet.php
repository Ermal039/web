<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminet</title>
    <link rel="stylesheet" href="./css/terminet.css">
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

        <!-- PJESA E PYETSORIT PER PERDORUESIN -->
<div class="container">
  <div class="header">
    <h2>Rezervimi i Termineve</h2>
    <p><b>Ju lutem plotësoni të dhënat e kërkuara për Rezervimin e Termineve!</b></p><br>
  </div>

  <form class="form" id="form">
    <div class="form-control">
      <label><b>Numri Personal:</b></label>
      <input type="number"  id="numri">
     </div>
   <div class="form-control">
    <label><b>Emri:</b></label>
    <input type="text"  id="emri">
   </div>

   <div class="form-control">
    <label><b>Mbiemri:</b></label>
    <input type="text"  id="Mbiemri">
   </div>

   <div class="form-control">
    <label><b>Emaili:</b></label>
    <input type="email"   id="email" required>
   </div>

   <div class="form-control">
    <label><b>Fjalekalimi:</b></label>
    <input type="password"   id="Fjalekalimi" required>
   </div>

   <div class="form-control">
    <label ><b>Ju lutem, zgjedhni Shërbimin Mjekësor!</b></label>
        </div>
        <select id="Sherbimi" name="sherbimi">
          <option value="Zg">Zgjedh:</option>
          <option value="An">Anesteziologji</option>
          <option value="Ka">Kardiokirurgji</option>
          <option value="Kd">Kardiologji</option>
          <option value="En">Endokrinologji</option>
          <option value="Op">Optomotologji</option>
          <option value="St">Stomatologji</option>
          <option value="Kp">Kirurgji Plastike</option>
          <option value="Op">Ortopedi</option>
          <option value="Re">Reumatologji</option>
         </select>
         <br>

          <div class="form-control">
              <label ><b>Ju lutem, zgjedhni Mjekun që dëshironi!</b></label>
                  </div>
                  <select id="Mjeku" name="Mjeku">
                      <option value="An">Zgjedh:</option>
                    <option value="LC">Lindita Çipi</option>
                    <option value="GM">Gertiana Mullalli</option>
                    <option value="AS">Ana Sula</option>
                    <option value="EP">Elton Petaj</option>
                    <option value="DS">Dritan Subashi</option>
                    <option value="KV">Kadri Venkatesh</option>
                    <option value="LX">Luan Xhelilaj</option>
                    <option value="FT">Fjorda Tuka</option>
                    <option value="EM">Esmeralda Sera</option>
        </select>
        <br>

        <div class="form-control">
          <label for="Date "><b>Ju lutem, zgjedhni daten!</b><br>
            <input type="date" name="date"><br>
        </label>
    </div>

    <button type="button" class="button">Apliko</button>

   </div>
  </form>
</div>





</html>