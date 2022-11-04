<?php

?>

<table border=1>
    <tr>
        <td>sno</td>
        <td>name</td>
        <td>email</td>
        <td>action</td>
    </tr>

    <?php
  include('db.php');

  $sql="SELECT * FROM `lists` ";

  $result=$db->query($sql);  
  print_r($result);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
     
        echo "<tr>
        <td>$row[ID]</td>
        <td>$row[fullname]</td>
        <td>$row[emailid]</td>
        <td>$row[passcode]</td>
        </tr>";

    }
  
}

  
    ?>
</table>