<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
</head>

<body>
    <form action="" enctype="multipart/form-data" method="POST">

        <div class="get_file">
            <input type="file" name="file">
        </div>
        <div class="submit">
            <!-- <button type="submit" name="submit" >Submit</button> -->
            <input type="submit" value="submit" name="btn">
        </div>
    </form>

    <?php

    if (isset($_FILES['file'])) {
        // print_r($_FILES['file']); //to check what is there in Global variable

        $file_name = $_FILES['file']['name'];//to get file name 
        $tmp_name = $_FILES['file']['tmp_name'];//to get file extension
        $file_size = $_FILES['file']['size'];//to get file size

        //   extract file
        $file_ext = explode('.', $file_name); //this method using slice the file name *it is an extent value

        $file_ext = strtolower(end($file_ext)); // end of the dot after contents are set in lowercase  

        // only allowed to these type of formates only
        $allowed = array('jpg', 'jpeg', 'png', 'gif', 'pdf', 'JPG', 'JPEG', 'PNG', 'GIF', 'PDF');


        if (in_array($file_ext, $allowed)) { //in_array method using what we have , what we need
            if ($file_size > 2097) {

                $file_destination = 'upload/'.time().$file_name;  //when file has been stored *actualy file was stored in tmp when will we gotit this will stored in relative path

                // echo $file_destination;

                if (move_uploaded_file($tmp_name, $file_destination)) { //this methos has from path , to path
                    echo $file_destination;
                } else {
                    echo "destination error";
                }
            }else{
                echo 'size error';
            }
        }else{
            echo "file type error";
        }
    }
    ?>

</body>

</html>