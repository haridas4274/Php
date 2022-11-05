<?php
include "db.php";


//print_r($_POST);
// print_r($_FILES);

// exit;
print_r($_FILES['imgFile']);


if(isset($_POST['regName'])){

    extract($_POST);
  
    $password=md5($regCpass);
    $sql="INSERT INTO `reglist` (Name,Email,Phone,Password) VALUES ('$regName','$regMail','$regPhone','$password')";
    $result=$db->query($sql);
    if($result){
        // echo "execution passed";
        


    }
    else{
        echo "execution failed";
    }
  
}else{
    echo "not connected";
}

?>