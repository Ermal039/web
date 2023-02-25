<?php
require_once ('sherbimetController.php');
if(isset($_GET['id'])){
    $sherbimetId= $_GET['id'];
}

$sherbimetmjeksore = new sherbimi();
$currentsherbimet = $sherbimetmjeksore->edit( $sherbimetId);

if(isset($_POST['submit'])){
    $sherbimetmjeksore->update($_POST,$sherbimetId);
}
?>


 
<form method="post">
Foto:

<input type="file" name="image" value="<?php echo $currentsherbimet['image']; ?>">
<br>
Titulli:
<input type="text" name="title" value="<?php echo $currentsherbimet['title']; ?>">
<br>
Permbajtja:
<input type="text" name="body" value="<?php echo $currentsherbimet['body']; ?>">
<br>
<input type="submit" name="submit" value="Update">
</form>


