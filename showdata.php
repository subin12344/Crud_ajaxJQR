<?php
include 'db.php';
<<<<<<< HEAD
// print_r($_POST);
   $id=$_POST['id'];

$sql="SELECT * FROM `std_info` WHERE id='$id'";
$result=$db->query($sql);
 $row=$result->fetch_assoc();

=======
$id=$_POST['id'];
$sql="SELECT * FROM `std_info` WHERE `id`='$id'";
$result=$db->query($sql);

$row=$result->fetch_assoc();
>>>>>>> 608a3ca352c094937377264790b0c40b582fcde4

echo json_encode($row);




<<<<<<< HEAD


=======
>>>>>>> 608a3ca352c094937377264790b0c40b582fcde4
?>