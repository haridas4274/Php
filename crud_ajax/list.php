<?php
include "config.php";

echo "<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Action</th>
</tr>";

$sql="SELECT * FROM `list`";
$result=$db->query($sql);

while($row=$result->fetch_assoc()){

echo "<tr>
<td>'.$row[Name].'</td>
<td>'.$row[Email].'</td>
<td>'.$row[Phone].'</td>
<td>
<button type='button' data-id='.$row[ID].' class='edit'>Edit</button>
<button type='button' data-id='.$row[ID].' class='delete'>delete</button>

</td>
</tr>";

}

?>