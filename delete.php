<?php
include 'db.php';
$id=$_POST['id'];
$sql="DELETE FROM `std_info` WHERE id='$id'";
$result=$db->query($sql);
if($result){
    echo "good";
}else{
    echo "bad";
}



?>