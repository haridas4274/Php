<?php
    include 'db.php';
    $id = $_GET['id'];
    $sql = "select * from crud_list where ID=$id";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
    print_r($data);
?>

<form action="" method="post">
    <input type="text" value="<?php echo $data['Name']; ?>" name="fullname" placeholder="Name">
    <input type="text" value="<?php echo $data['Email']; ?>" name="emailid" placeholder="Email">
    <input type="text" value="<?php echo base64_decode($data['Password']); ?>" name="passcode" placeholder="Password">
    <input type="submit" name="submit" value="Submit">
</form>

<?php

if(isset($_POST['submit'])){

    print_r($_POST);
    extract($_POST);

    $en_ps = base64_encode($passcode);

    $sql = "update student set name='$fullname', email='$emailid', password='$en_ps' where id=$id";

    if($db->query($sql)){
        $msg = "Record updated successfully";
    } else{
        $msg = "ERROR: Could not able to execute $sql. " . $db->error;
    }
    header("Location: list.php?$msg");

}

?>