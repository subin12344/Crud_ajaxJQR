<?php
include 'db.php';
<<<<<<< HEAD
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

=======
$file=$_FILES['img']['name'];
print_r($_FILES);
// $id=$_POST['id'];
// print_r($_POST);
extract($_POST);
$sql="UPDATE `std_info` SET `name`='$name',`email`='$mail',`phone`='$phone',`native`='$ntv' WHERE `id`='$id'";

$result=$db->query($sql);

if($result){

    $sql="UPDATE `std_info` SET photo='$file' WHERE id='$id'";
    move_uploaded_file($_FILES['img']['tmp_name'],"$file");
    $resullt=$db->query($sql);
    if($resullt){
        echo "good";

    }else{
        echo "bad";
    }
    echo "success";
}else{
    echo "err";
>>>>>>> 608a3ca352c094937377264790b0c40b582fcde4
}





?>