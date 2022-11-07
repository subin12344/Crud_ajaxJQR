<<<<<<< HEAD
<?php    
include 'db.php';

echo " <tr>
=======
<?php 
include 'db.php';
echo" <tr>
>>>>>>> 608a3ca352c094937377264790b0c40b582fcde4
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Native</th>
<<<<<<< HEAD

=======
<th>photo</th>
>>>>>>> 608a3ca352c094937377264790b0c40b582fcde4
<th>Action</th>
</tr>";

$sql="SELECT * FROM `std_info`";
$result=$db->query($sql);
while($row=$result->fetch_assoc()){
<<<<<<< HEAD
    echo " <tr $row[id]>

=======
    echo " <tr id='$row[id]'>
>>>>>>> 608a3ca352c094937377264790b0c40b582fcde4
    <td>$row[name]</td>
    <td>$row[email]</td>
    <td>$row[phone]</td>
    <td>$row[native]</td>
<<<<<<< HEAD
   
    <td>
    <button class='btn btn-outline-info' data-bs-toggle='modal' data-bs-target='#exampleModal' id='edit' data-id='$row[id]'>edit</button>
    <button class='btn btn-outline-danger 'id='delate' data-id='$row[id]'>delate</button>
    
    </td>

=======
    <td><img src='$row[photo]' alt='photo err'></td>
    <td>
    <button  class='btn btn-warning edit ' data-bs-toggle='modal'data-bs-target='#exampleModal' data-id='$row[id]'> edit</button>
    <button class='btn btn-danger  delete'   data-id='$row[id]'>delete</button>
    
    </td>
>>>>>>> 608a3ca352c094937377264790b0c40b582fcde4
   </tr>";
}




<<<<<<< HEAD
?>
<button></button>
=======

?>

>>>>>>> 608a3ca352c094937377264790b0c40b582fcde4
