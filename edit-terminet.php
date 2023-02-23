<?php
require_once ('modeliterminet.php');
if(isset($_GET['id'])){
    $terminetId= $_GET['id'];
}

$terminet = new modeliterminet;
$currentterminet = $terminet->edit( $terminetId);

if(isset($_POST['submit'])){
    $terminet->update($_POST,$terminetId);
}
?>

<form method="post">
NumriPersonal:
<input type="text" name="numripersonal" value="<?php echo $currentsherbimet['numripersonal']; ?>">
<br>
Emri:
<input type="text" name="emri" value="<?php echo $currentsherbimet['emri']; ?>">
<br>
Mbiemri:
<input type="text" name="mbiemri" value="<?php echo $currentsherbimet['mbiemri']; ?>">
<br>
Emaili:
<input type="email" name="emaili" value="<?php echo $currentsherbimet['emaili']; ?>">
<br>
Fjalekalimi:
<input type="password" name="fjalekalimi" value="<?php echo $currentsherbimet['fjalekalimi']; ?>">
<br>
Sherbimi:
<input type="Sherbimi" name="sherbimi" value="<?php echo $currentsherbimet['sherbimi']; ?>">
<br>
Mjeku:
<input type="Mjeku" name="mjeku" value="<?php echo $currentsherbimet['mjeku']; ?>">
<br>
Data:
<input type="date" name="data" value="<?php echo $currentsherbimet['data']; ?>">
<br>
<input type="submit" name="submit" value="Update">
</form>
