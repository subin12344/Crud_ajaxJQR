<?php

include "db.php";

// print_r($_POST);

if(isset($_POST["name"])){
     extract($_POST);

     $sql="INSERT INTO `std_info` (name,email,phone,native,photo) VALUES ("$name","$email","$phone","$ntv","$img")"
    
}
?>