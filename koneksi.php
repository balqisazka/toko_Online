<?php
 
$con =  mysqli_connect('localhost','root', '', 'toko_online');

//check connection
if (mysqli_connect_errno()) {
    echo "Failed tp connect to MySQL: " . mysqli_connect_errno();
    exit();  
}
?>