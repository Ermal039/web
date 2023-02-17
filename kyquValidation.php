<?php

include_once 'users.php';
//isset = funksion me shiku a e ka marr 1 vler qe eshte e ndryshme prej null
//a jane marr te dhenat prej momentin qe u bo login
if (isset($_POST['loginBtn'])){
    if(empty($_POST['username']) || empty ($_POST['password'])){
        echo "Ju lutem plotesoni te dhenat e zbrazeta";
    }else{
         $username = $_POST['username'];
         $password = $_POST['password'];

         //iteron te user1 edhe user2
         $i=0;
         foreach($users as $user){
            $i++;
            if($username == $user['username'] && $password == $user['password']){

                session_start();
                
                //mi bo set
                $_SESSION ['username']= $username;
                $_SESSION['password'] =$password;
                $_SESSION['role']=$user['role'];
                
                header("location:home.php");
                exit();
            }else{
                //nese nuk ju perket userave atehere nuk pranohesh mu bo login
                if($i == sizeOf($users)){
               echo "Username ose Passwordi jane gabim!";
                exit();
                }
            }
         }

    }
}









?>