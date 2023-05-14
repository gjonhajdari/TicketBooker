<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
             width: 100%;
            border-collapse: collapse;
                }

        table, td, th {
              border: 1px solid black;
             padding: 5px;
                }

        th {text-align: left;}
    </style>
</head>
<body>
    
    </style>
</head>

<body>
    

<?php
include 'ticketConnect.php';
require 'ticketConnect.php';

$conn = mysqli_connect($dbhost, $dbbuser,$dbpass, $db);

if(! $conn){
	die('Connection failed: '.mysqli_connect_error());
}

$q = intval($_GET['q']);


mysqli_select_db($con, "TicketBooker");
$sql = "SELECT * FROM ticket WHERE name = '" .$q. "'" ;
$result = mysqli_query($con,$sql);

echo "<table> 
<tr>
<th>Option</th>
<th>Name</th>
<th>Date</th>
<th>Time</th>
<th>Location</th>
<th>Description</th>
</tr>";

while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['option'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td>" . $row['locaion'] ."</td>";
echo "<td>" . $row['description'] . "</td>";

echo "</tr>";

}

echo "</table>";
mysqli_close($conn);
?>
</body>
</html>
