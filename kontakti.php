<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontakti</title>
    <link rel="stylesheet" href="./css/kontakti.css" />
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
          <li><a href="./terminet.php">Terminet</a></li>
          <li id="kyqu"><a href="./kyqu.php">Kyqu</a></li>
        </ul>
      </nav>

    <section>
      <div class="container">
        <!-- PJESA E DERGIMIT TE MESAZHIT -->
        <div class="contactForm">
          <h2>Dergoni Mesazh</h2>
         
          
          <div class="formBox">
            <div class="inputBox w50">
              <input type="text" name="name" required />
              <span>Emri</span>
            </div>

            <div class="inputBox w50">
              <input type="text" name="surname" required />
              <span>Mbiemri</span>
            </div>

            <div class="inputBox w50">
              <input type="email" name="email" required />
              <span>Emaili</span>
            </div>

            <div class="inputBox w50">
              <input type="text"name= "phone" required />
              <span>Numri Telefonit</span>
            </div>

            <div class="inputBox w100">
              <span>Shkruani mesazhin këtu...</span>
              <textarea name="message" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="inputBox" id="send">
              <input type="submit" value="Send" />
            </div>
          </div>
        </div>

        <!-- PJESA E INFO KONTAKTIT -->
        <div class="contactInfo">
          <div>
            <h2>Kontakt Info</h2>
          </div>
          <ul class="info">
            <li>
              <span> <img src="./img/location.png" /></span>
              <span> Ortomedika, Prishtinë </span>
            </li>

            <li>
              <span> <img src="./img/email.png" /></span>
              <span> spitaliortomedika@hotmail.com </span>
            </li>

            <li>
              <span> <img src="./img/telephone-call.png" /></span>
              <span> +383 44 123 456 </span>
            </li>
          </ul>

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2074.738200372819!2d20.
                        295905175470097!3d42.65875090586254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                        1!3m3!1m2!1s0x1352fd247576adad%3A0xe995f8073a7e61f2!2sBeni%20Parking!5e0!3m2!1sen!2s!
                        4v1656073935147!5m2!1sen!2s"
            width="310"
            height="150"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          >
          </iframe>

          <ul class="media">
            <li>
              <a href=""> <img src="./img/facebook-contact form.png" /> </a>
            </li>

            <li>
              <a href=""> <img src="./img/twitter - contact form.png" /> </a>
            </li>

            <li>
              <a href=""> <img src="./img/instagram - contact form.png" /> </a>
            </li>
          </ul>
        </div>
      </div>
    </section>


  </body>
</html>
