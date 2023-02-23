<?php

require_once ('modeliterminet.php');

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
              <th>numripersonal</th>
              <th>emri</th>
              <th>mbiemri</th>
              <th>emaili</th>
              <th>fjalekalimi</th>
              <th>sherbimi</th>
              <th>mjeku</th>
              <th>data</th>
            </tr>
        </thead>

        <tbody>
<?php
$ter = new modeliterminet;
$allterminet = $ter->readData();
foreach($allterminet as $terminet): ?>
    <tr>
              <td><?php echo $terminet['numripersonal'];?></td>
              <td><?php echo $terminet['emri'];?></td>
              <td><?php echo $terminet['mbiemri'];?></td>
              <td><?php echo $terminet['emaili'];?></td>
              <td><?php echo $terminet['fjalekalimi'];?></td>
              <td><?php echo $terminet['sherbimi'];?></td>
              <td><?php echo $terminet['mjeku'];?></td>
              <td><?php echo $terminet['data'];?></td>
              <td><a href="edit-terminet.php?id=<?php echo $terminet['id'];?>">EDIT</a></td>
              <td><a href="delete-terminet.php?id=<?php echo $terminet['id'];?>">DELETE</a></td>
            </tr>
            <?php endforeach; ?>
             </tbody>
    </table>
</div>