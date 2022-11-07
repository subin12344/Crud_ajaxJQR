<?php
include 'db.php';
$id=$_POST['id'];
<<<<<<< HEAD
$sql="DELETE FROM `std_info` WHERE id='$_POST[id]'";
$result=$db->query($sql);
if($result){
    echo 5;
}else{
    echo 6;
=======
$sql="DELETE FROM `std_info` WHERE id='$id'";
$result=$db->query($sql);
if($result){
    echo "good";
}else{
    echo "bad";
>>>>>>> 608a3ca352c094937377264790b0c40b582fcde4
}



<<<<<<< HEAD


=======
>>>>>>> 608a3ca352c094937377264790b0c40b582fcde4
?>