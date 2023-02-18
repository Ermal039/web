<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href ="css/mysingUPstyle.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h3>Shto te dhenat ne Formularin e Regjistrimit</h3>
            <form action='' method="POST">
                <label>Emri dhe Mbiemri</label>
                <input type="text" class="inp" name="emrimbiemri"
                    value ="<?php echo $records['emrimbiemri'];?> "/>

                    <label>Email</label>
                <input type="text" class="inp" name="email"
                    value ="<?php echo $records['email'];?> "/>

                <label>Fjalkalimi</label>
                <input type="text" class="inp" name="fjalkalimi"
                    value ="<?php echo $records['fjalkalimi'];?> "/>

                <label>Nr.Telefonit</label>
                <input type="text" class="inp" name="nrtelefonit"
                     value ="<?php echo $records['nrtelefonit'];?> "/>
                     
                <button name='edit'>RUAJ</button>
            </form>
        </div>
    </body>
</html>