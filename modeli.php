<?php

require_once ('DB_Connection.php');

class regjistrohu extends dbConnect{
    private $id;
    private $emrimbiemri;
    private $email;
    private $fjalkalimi;
    private $nrtelefonit;
    private $dbconn;

    public function __construct($id='',$emrimbiemri='',$email='',$fjalkalimi='',$nrtelefonit='')
    {
    $this ->id=$id;
    $this ->emrimbiemri=$emrimbiemri;
    $this ->email=$email;
    $this ->fjalkalimi=$fjalkalimi;
    $this ->nrtelefonit=$nrtelefonit;
  
    $this ->dbconn=$this ->connectDB();
    }
 
    public function setId($id){
        $this ->id=$id;
    }
    public function getId(){
        return $this ->id;
    }

    public function setEmriMbiemri($emrimbiemri){
        $this ->emrimbiemri=$emrimbiemri;
    }
    public function getEmriMbiemri(){
        return $this ->emrimbiemri;
    }

    public function setEmail($email){
        $this ->email=$email;
    }
    public function getEmail(){
        return $this ->email;
    }

    public function setFjalkalimi($fjalkalimi){
        $this ->fjalkalimi=$fjalkalimi;
    }
    public function getFjalkalimi(){
        return $this ->fjalkalimi;
    }


    public function setNrTelefonit($nrtelefonit){
        $this ->nrtelefonit=$nrtelefonit;
    }
    public function getNrTelefonit(){
        return $nrtelefonit ->nrtelefonit;
    }

    //Pjesa e me poshtme eshte krijimi i crud, insert,delete,update
    public function insertoDhenat(){
       $sql="INSERT INTO regjistrohu (emrimbiemri,email,fjalkalimi,nrtelefonit) VALUES (:emrimbiemri,:email,:fjalkalimi,:nrtelefonit)";
        $stm=$this ->dbconn ->prepare ($sql);
        $stm ->bindParam(':emrimbiemri',$this->emrimbiemri);
        $stm ->bindParam(':email',$this->email);
        $stm ->bindParam(':fjalkalimi',$this->fjalkalimi);
        $stm ->bindParam(':nrtelefonit',$this->nrtelefonit);
  //Testim i Metodes
 /* $this ->emrimbiemri='AndaPilingjurka';
  $this ->email='andapilingjurka@gmail.com';
  $this ->fjalkalimi= '12345';
  $this ->nrtelefonit='044123321';*/
        $stm ->execute();

         echo "<script>
         alert('dhenat jane regjistruar me sukses');
         document.location='regjistrimi.php';
         </script>";
    }
    public function lexoDhenat()
    {
    $sql="SELECT * FROM regjistrohu";
    $stm=$this->dbconn->prepare($sql);
     
    $stm->execute();
  $rezultati= $stm->FETCHALL(PDO::FETCH_ASSOC); 

   return $rezultati;
    }
    public function deleteDhenat($id){
        $sql="DELETE FROM regjistrohu where id=:id";
        $stm=$this->dbconn->prepare($sql);
        $stm ->bindParam(':id',$id);
        $stm ->execute();
        if($stm == true){
            echo "<script>
            alert('te dhenat jane DELETE me sukses');
            document.location='regjistrimi.php';
            </script>";
        }else{
            return false;
        }
        }

    }




//$test = new regjistrimi ();
//$test ->insertoDhenat();
?>