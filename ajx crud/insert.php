<?php
include "db.php";
print_r($_POST);
if(isset($_POST['name'])){
   extract($_POST);
   $sql="INSERT INTO `lists`(Name,Email,Password) VALUES ('$name','$email','$password')"; 
   

   if($db->query($sql)){

    echo "inserted successfully" ;
   }else{
    echo " Inserted Error";
   }
};
?>