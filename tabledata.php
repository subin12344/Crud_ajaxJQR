<?php    
include 'db.php';

echo " <tr>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Native</th>

<th>Action</th>
</tr>";

$sql="SELECT * FROM `std_info`";
$result=$db->query($sql);
while($row=$result->fetch_assoc()){
    echo " <tr $row[id]>

    <td>$row[name]</td>
    <td>$row[email]</td>
    <td>$row[phone]</td>
    <td>$row[native]</td>
   
    <td>
    <button class='btn btn-outline-info' data-bs-toggle='modal' data-bs-target='#exampleModal' id='edit' data-id='$row[id]'>edit</button>
    <button class='btn btn-outline-danger 'id='delate' data-id='$row[id]'>delate</button>
    
    </td>

   </tr>";
}




?>
<button></button>