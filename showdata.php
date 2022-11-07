<?php
include 'db.php';
$id=$_POST['id'];
$sql="SELECT * FROM `std_info` WHERE `id`='$id'";
$result=$db->query($sql);

$row=$result->fetch_assoc();

echo json_encode($row);




?>