<table border=1>
    <tr>
        <td>sno</td>
        <td>name</td>
        <td>email</td>
        <td>action</td>
    </tr>
    <?php
    
    include 'db.php';
    
    $sql = "select * from crud_list";
    $result = $db->query($sql);
    //print_r($result);
print_r( $result->fetch_assoc());
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          echo "<tr>
                <td>$row[ID]</td>
                <td>$row[Name]</td>
                <td>$row[Email]</td>
                <td><a href='edit.php?id=$row[ID]'>Edit</a>
                <a href='delete.php?id=$row[ID]'>Delete</a></td>
                </tr>
                ";
        }

    } else {
        echo "<tr><td colspan='4'>No records found</td></tr>";
    }

    
    ?>
</table>


<?php

if(isset($_GET['msg'])){
    echo $_GET['msg'];
}

?>