<?php
$server="localhost";
$username="root";
$password="";
$db="contact";
 $conn=new mysqli($server,$username,$password,$db);
 if(!$conn){
    die("connection to this database faild due to" . 
    mysqli_connect_error() ) ;
}
echo"Success connecting to the db "; 
?>