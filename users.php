<?php

require_once ('db_Connection.php');



class KyquUsers{
    private $connection;


    function __construct(){
        $conn = new dbConnect;
        $this->connection = $conn->connectDB();
    }


    function getUsersEmridheFjalekalimi(){
        $conn = $this->connection;


        $sql = "SELECT emrimbiemri,fjalkalimi,role from regjistrohu";
        $statement = $conn->query($sql);
        $usersLogin = $statement->fetchAll();

        return $usersLogin;
    }
}


?>