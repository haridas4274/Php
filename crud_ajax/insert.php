<?php
include "config.php";

if(isset($_POST['name'])){

    extract($_POST);

    print_r($_POST);

    $sql="INSERT INTO `list` (Name,Email,Phone) VALUES ('$name','$email',$phone)";
    $result=$db->query($sql);


    // if($result){
    //     echo "insert succesfully";
    // }else{
    //     echo "inserting Error";
    // }
    if(!$result){
        echo "inserting Error";
    }
}
?>