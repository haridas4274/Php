<?php
include "db.php";

$sql="SELECT * FROM `lists` WHERE ID='$_POST[id]'";
$result=$db->query($sql);
$row=$result->fetch_assoc();

echo json_encode($row);


?>