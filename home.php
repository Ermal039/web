
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
    
    <h1>Home</h1>
    <a href="logout.php">LogOut</a>
    <a href="dashboard.php" class="<?=$hide?>">Dashboard</a>
           
    <style>
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