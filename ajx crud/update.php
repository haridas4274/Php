<?php
include "db.php";

if(isset($_POST['name'])){

    extract($_POST);

    $sql="UPDATE `lists` SET Name='$name',Email='$email',Password='$password' WHERE ID='$id'";
    $result=$db->query($sql);
    if($result){
        echo "updated succefully";
    }else{
        echo "Updating Error";
    }

}
?>