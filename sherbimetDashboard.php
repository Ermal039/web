<?php

require_once ('sherbimetController.php');

?>
<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
</style>







<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Foto</th>
              <th>Titulli</th>
              <th>Permbajtja</th>
              <th>Ndrysho</th>
              <th>Fshij</th>
            </tr>
        </thead>

        <tbody>
<?php
$sh = new sherbimi();
$allsherbimetmjeksore = $sh->readData();
foreach($allsherbimetmjeksore as $sherbimetmjeksore): ?>
    <tr>
              <td><?php echo $sherbimetmjeksore['image'];?></td>
              <td><?php echo $sherbimetmjeksore['title'];?></td>
              <td><?php echo $sherbimetmjeksore['body'];?></td>
              <td><a href="edit-sherbimet.php?id=<?php echo $sherbimetmjeksore['id'];?>">Edit</a></td>
              <td><a href="delete-sherbimet.php?id=<?php echo $sherbimetmjeksore['id'];?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>
             </tbody>
    </table>
</div>