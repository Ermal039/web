<?php
require_once './modelicontact.php';
require_once './controllers/MenuController.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/menuDashboard.css" />
    <script defer src="./menuDashboard.js"></script>

  </head>
  <body>
    <nav>
      <a href="#"> <h1>DASHBOARD</h1> </a>
      <a href="#" id="logout"> <h1>LOG OUT</h1></a>
    </nav>
    <div class="sidebar">
      <ul>
        <li>
          <img src="./images/admin.png" alt="" />
          <p>ADMIN</p>
        </li>
        <li><a id="sherbimet-link" href="#">Sherbimet</a></li>
        <li><a id="stafi-link" href="#">Stafi</a></li>
        <li><a id="kontakti-link" href="#">Kontakti</a></li>
        <li><a id="terminet-link" href="#">Terminet</a></li>
      </ul>
    </div>

    <div class="main-content">
      <!-- STAFI -->
        
<div class="staf">
    <table class="content-table">
        <thead>
            <tr>
                <th>Imazhi</th>
                <th>Emri</th>
                <th>Profesioni</th>
                <th>Edito</th>
                <th>Fshij</th>
            </tr>
        </thead>

        <tbody>
          <?php
            $m = new MenuController;
            $allMenu = $m->readData();
            foreach($allMenu as $menu):
          ?>

            <tr>
                <td> <?php echo $menu['menu_image']?> </td>
                <td> <?php echo $menu['menu_title']?></td>
                <td> <?php echo $menu['menu_body']?></td>
                <td> <a class="a" href="edit-menu.php?id=<?php echo $menu['id'];?>">Edit</a> </td>
                <td> <a class="a" href="delete-menu.php?id=<?php echo $menu['id'];?>">Delete</a> </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a id="butoni" href="./create-menu.php">SHTO</a>

</div>

      <!-- KONTAKTI -->
      <div class="kontakt">
        <table class="content-table">
        <thead>
            <tr>
            
              <th>Emri</th>
              <th>Mbiemri</th>
              <th>Emaili</th>
              <th>NrTelefonit</th>
              <th>Mesazhi</th>
              <th>Fshij</th>
              
            </tr>
        </thead>

        <tbody>
        <?php
        $kon = new kontakti();
        $allkontakti = $kon->readData();
        foreach($allkontakti as $kontakti): ?>
        <tr>
              
              <td><?php echo $kontakti['emri'];?></td>
              <td><?php echo $kontakti['mbiemri'];?></td>
              <td><?php echo $kontakti['emaili'];?></td>
              <td><?php echo $kontakti['nrtelefonit'];?></td>
              <td><?php echo $kontakti['mesazhi'];?></td>
          
              <td><a href="delete-contact.php?id=<?php echo $kontakti['id'];?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>
             </tbody>
        </table>
        <a id="butoni" href="./contact.php">SHTO</a>
      </div>



    </div>


  </body>
</html>
