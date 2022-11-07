<?php
include 'db.php';
$id=$_POST['id'];
$sql="DELETE FROM `std_info` WHERE id='$_POST[id]'";
$result=$db->query($sql);
if($result){
    echo 5;
}else{
    echo 6;
}





?>