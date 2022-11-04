
<?php
//this page has 
include "db.php";
echo '<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Action</th>
</tr>';

$sql="SELECT * FROM `lists` ";
$result=$db->query($sql);

while($row=$result->fetch_assoc()){

    echo '<tr id="'.$row['ID'].'">
        <td>'.$row['Name'].'</td>
        <td>'.$row['Email'].'</td>
        <td>'.$row['Password'].'</td>
        <td>
            <button class="btn btn-info edit" data-id="'.$row['ID'].'">Edit</button>
            <button class="btn btn-warning delete" data-id="'.$row['ID'].'">Delete</button>
        </td>
    </tr>';
}


?>