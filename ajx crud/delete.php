<?php 
 include "db.php";  
 $sql="DELETE FROM `lists` WHERE ID='$_POST[id]' ";
 $result=$db->query($sql);

 if($result){
    echo 1;
 }else{
    echo 0;
 }

?>