<?php

$dbhost = 'localhost:3307';
$dbbuser = 'root';
$dbpass = '';
$db = 'ticketbooker';


$conn = mysqli_connect($dbhost, $dbbuser, $dbpass, $db);

$results = $conn -> query("SELECT * FROM `ticket`");

print_r($results);


?>

<?php while ($data = $results-> fetch_assoc()):?>

<tr>
    <td><?php echo $data['tid']; ?></td>
    <td><?php echo $data['option']; ?></td>
    <td><?php echo $data['event_title']; ?></td>
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['time']; ?></td>
    <td><?php echo $data['location']; ?></td>
    <td><?php echo $data['description']; ?></td>
</tr>
    
<?php endwhile; ?>

