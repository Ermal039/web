<?php
require_once('modeli.php');
if(isset($_POST['save'])){
    $regj=new regjistrohu();
    $regj -> setEmriMbiemri($_POST['emrimbiemri']);
    $regj -> setEmail($_POST['email']);
    $regj -> setFjalkalimi($_POST['fjalkalimi']);
    $regj -> setNrTelefonit($_POST['nrtelefonit']);

    $regj ->insertoDhenat();
}


?>



<!DOCTYPE html>
<htm>
    <head>
        <link rel="stylesheet" href ="css/mysingUPstyle.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h3>Shto te dhenat ne Formularin e Regjistrimit</h3>
            <form action='' method="POST">
                <label>Emri dhe Mbiemri</label>
                <input type="text" class="inp" name="emrimbiemri" placeholder="shto emrin dhe mbiemrin..."/>
                
                <label>Email</label>
                <input type="text" class="inp" name="email" placeholder="shto email..."/>

               
                <label>Fjalkalimi</label>
                <input type="password" class="inp" name="fjalkalimi" placeholder="shto fjalkalimin..."/>
               
                <label>Nr.Telefonit</label>
                <input type="text" class="inp" name="nrtelefonit" placeholder="shto nrtelefonit"/>
                <button name='save'>RUAJ</button>
            </form>
        </div>
    </body>
</htm>