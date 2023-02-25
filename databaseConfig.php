<?php
class DatabasePDOConfiguration{
    private $connection ;
    private $host = 'localhost';
    private $dbname = 'regjistrimi';
    private $username = 'root';
    private $password = '';

     public function __construct($userid){

        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", 
                                    $this->username, $this->password);
                                    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "<br/>";
                                
                               $statement=$this->connection->prepare("select * from users where uderid=:id");
                               $statement ->bindParam(":id",$userid);
                               $statement->execute();
                            }

        protected function getConnection(){
            return $this->connection;
        } 
        
     }
}

class DatabaseMySQLiConfiguration{
    private $connection;
    private $host="localhost";
    private $dbname = 'regjistrimi';
    private $username = 'root';
    private $password = '';

     public function __construct(){

      
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", 
                                    $this->username, $this->password);
           
        }
        protected function getConnection(){
            return $this->connection;
        } 
    }
     







?>