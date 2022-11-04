<?php
//this page connet to the database is name was *crud_ajax*  there are five column that is id,name,email,phone.

$db=new mysqli("localhost","root","","crudajax");
if(!$db){
    echo "connecton Error";
}

?>
