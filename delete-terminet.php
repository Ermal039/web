<?php
require_once ('modeliterminet.php');

if(isset($_GET['id'])){
    $terminetId = $_GET['id'];
}
$terminet = new modeliterminet;
$terminet->delete($terminetId);

?>