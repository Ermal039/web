<?php
require_once('modeli.php');

$dhenat=new regjistrohu();
$allData=$dhenat ->lexoDhenat();


?>



<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href ="css/displayStyle.css" />
        <title>Shfaq dhenat</title>
    </head>
    <body>
        <div id="a1">
            <header>
                <h3>Ju lutem shtype per te regjistruar te dhenat ne Sistem</h3>
                <a href="insert.php"><Button id='r'>Regjistrohu</Button></a>
            </header>
            <table>
            <hr>
            <p>Lista e te dhenave:</p>
                    <tr>
                        <th>Emri dhe Mbiemri</th>
                        <th>Email</th>
                        <th type="password">Fjalkalimi</th>
                        <th>Nr.Telefonit</th>
                       
                    </tr>
                    <tr>
                      <?php
                     foreach($allData as $key =>$value){
                        $value['emrimbiemri']
                     
                      ?>
                        <td><?php echo $value['emrimbiemri']?></td>
                        <td><?php echo $value['email']?></td>
                        <td><?php echo $value['fjalkalimi']?></td>
                        <td><?php echo $value['nrtelefonit']?></td>
                        <td id='de'><a href="delete.php?id=<?php echo $value['id']?>"><button id="d">DELETE</button></a>
                           <a  href=""><button id='e'>EDIT</button></td></a>
                    </tr>  
                  <?php
                     }
                  ?>
                  
            </table>
        </div>
    </body>
</html>