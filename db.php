<?php
ini_set('display_errors', 1);

 
$server = "localhost";
$username = "train8";
$pass = "IqbalSKT12";
$dbname = "train8_demo";


$con = mysqli_connect($server , $username , $pass ,$dbname);

  if(!$con)
   {
      die("connection to this database  failed due to" . mysqli_connect_error());
   }
   

?>