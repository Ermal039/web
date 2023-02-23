<?php
require_once ('sherbimetController.php');

$menu = new sherbimetController;
if(isset($_POST['submit'])){
    $menu->insert($_POST);
}


?>
<div>
    <style>
 input[type="file"] {
  background-color: rgb(240, 240, 240);
  padding: 15px;
  border-radius: 5px;
  border: 2px solid #ccc;
  margin: 0 auto; width: 400px; text-align: center;
}




input[type="text"] {
  background-color: rgb(240, 240, 240);
  padding: 10px;
  border-radius: 5px;
  border: 2px solid #ccc;
  margin: 0 auto; width: 400px; text-align: center;
}

textarea {
  background-color: rgb(240, 240, 240);
  padding: 20px;
  border-radius: 5px;
  border: 3px solid #ccc;
  margin: 0 auto; width: 400px; text-align: center;
}

input[type="submit"] {
  background-color: rgb(240, 240, 240);
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 15px;
  font-weight: bold;
}
</style>
    <form method="POST">
        Foto:
        <input type="file" name="image">
        <br>
        Titulli:
        <input type="text" name="title">
        <br>
        Permbajtja:
        <textarea name="body" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>