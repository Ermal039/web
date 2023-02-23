<?php
require_once ('sherbimetController.php');

if(isset($_GET['id'])){
    $sherbimetId = $_GET['id'];
}
$sherbimetmjeksore = new sherbimetController;
$sherbimetmjeksore->delete($sherbimetId);

?>