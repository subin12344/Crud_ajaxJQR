<?php 
include 'db.php';
echo" <tr>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Native</th>
<th>photo</th>
<th>Action</th>
</tr>";

$sql="SELECT * FROM `std_info`";
$result=$db->query($sql);
while($row=$result->fetch_assoc()){
    echo " <tr id='$row[id]'>
    <td>$row[name]</td>
    <td>$row[email]</td>
    <td>$row[phone]</td>
    <td>$row[native]</td>
    <td><img src='$row[photo]' alt='photo err'></td>
    <td>
    <button  class=' btn btn-success my-3 edit ' data-bs-toggle='modal'data-bs-target='#exampleModal'z data-id='$row[id]'> edit</button>
    <button class=' btn btn-success my-3  delete'   data-id='$row[id]'>delete</button>
    
    </td>
   </tr>";
}





?>

