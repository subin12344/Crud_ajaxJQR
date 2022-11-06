<?php

include "db.php";
// print_r($_FILES);


if(isset($_POST["name"])){
     $file=$_FILES['img']['name'];
   
     extract($_POST);
     // print_r($_POST);

     $sqli="INSERT INTO `std_info` (name,email,phone,native) VALUES ('$name','$mail','$phone','$ntv')";
     $results=$db->query($sqli);
     $instert_id = $db->insert_id;
     if($results){
          
          $sql="UPDATE   std_info SET photo='$file' WHERE id='$instert_id'";
          move_uploaded_file($_FILES['img']['tmp_name'],"$file");
          $result=$db->query($sql);
          if($result){
               echo "good";

          }else{
               echo "bad";
          }

          // echo 1;
     }
     // else{
     //      echo 2;
     // }

    
}else{

}



?>