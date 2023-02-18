<?php

session_start();
// me kqyr a o i jept ni username edhe qit username nuk e dergon ne php por kur del prej dashboard me dergu ne log in
if(!isset($_SESSION['username'])){
    header("location:kyqu.php");

}else{
    if($_SESSION['role']== 'user'){
        header("location:home.php");
    }else{
    
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>
<body>
<h1>Dashboard</h1>
</body>
</html>


<?php
    }
}
?>