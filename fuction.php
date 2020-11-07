<?php
ob_start();
include 'db.php';
   echo $id = $_POST['path'];
  $target_dir ="../docs/images/";
  echo $target_file = $target_dir . basename($_FILES["$id"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  echo move_uploaded_file($_FILES["$id"]["tmp_name"],$target_file);
  echo $file=$_FILES["$id"]["name"];
   insert_data($con,$id);
   function insert_data($con,$id)
   { 
      echo $sql_insert="insert into file_upload(path) values('../docs/images/$id')";
      $exe=mysqli_query($con,$sql_insert);
   }
?>