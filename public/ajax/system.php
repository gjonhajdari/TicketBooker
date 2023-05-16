<?php
$conn = mysqli_connect("localhost:3307", "root","", "ticketbooker" );
$rows = mysqli_query($conn, "SELECT * FROM users")

?>

<table border= 1 cellpadding =10>
<tr>
    <td>ID</td>
    <td>User_Type</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Email</td>
    <td>Avatar</td>

</tr>
<?php $i =1; ?>
<tr>
    <td><?php echo $i++; ?></td>
    <td><?php echo $row["user_id"]; ?></td>
    <td><?php echo $row["user_type"]; ?></td>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["avatar"]; ?></td>


</tr>





?>
</table>

