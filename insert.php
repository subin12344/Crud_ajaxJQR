<?php

include "db.php";
// print_r($_FILES);


if(isset($_POST["name"])){
     $file=$_FILES['img']['name'];
   
     extract($_POST);

     $sql="INSERT INTO `std_info` (name,email,phone,native,photo) VALUES ("$name","$email","$phone","$ntv","$img")"
    
}else{

}



?>