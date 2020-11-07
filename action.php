<?php
include 'db.php';
include('fuction.php');
if(isset($_POST["submit"]))
{
    echo $target_dir ="../docs/images/";
    echo $target_file = $target_dir . basename($_FILES["file"]["name"]);
    echo $uploadOk = 1;
    echo $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    echo move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);
    echo $file=$_FILES["file"]["name"];
    echo insert_data($con,$file);
}
?>