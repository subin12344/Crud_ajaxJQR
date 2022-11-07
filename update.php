<?php
include 'db.php';
// print_r($_POST);
if(isset($_POST['name'])){
    extract($_POST);
    $sql="UPDATE `std_info` SET name='$name',email='$mail',phone='$phone',native='$ntv' WHERE id='$id'";
    $result=$db->query($sql);
    if($result){
        echo 2;
    }else{
        echo 3;
    }

}





?>