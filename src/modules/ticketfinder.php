<?php
include_once('db.php');

$type = $_POST['type'] ?? ''; 
$date = $_POST['when'] ?? ''; 
$location = $_POST['location']?? ''; 

$date = trim($date); // Removes any whitespaces
$formattedDate = date("Y-m-d", strtotime($date)); // Formats the date as 'YYYY-MM-DD'

// if ($formattedDate === '1970-01-01') {
//     echo "<div class='alert alert-danger w-50 p-3'>Invalid date</div>";
//     exit;
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (empty($date)) {
    echo "<div class='alert alert-danger w-50 p-3'>Invalid date</div>";
} else{

$sql = "SELECT `tid`,`option`, `date`, `location` FROM `ticket` WHERE `option` = '$type' AND `date` = '$date' AND `location` = '$location'";

$result = mysqli_query($conn, $sql);

if ($result) {
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $tid = $row['tid'];
            $option = $row['option'];
            $date = $row['date'];
            $location = $row['location'];

           
            $_SESSION["tid"] = $tid;
            $_SESSION["option"] = $option;
            $_SESSION["date"] ;
            $_SESSION["location"] = $location;
        }
        echo '<script>window.location.href = "../public/find.php";</script>'; 
         exit;
    } else {
        echo '<script>window.location.href = "../public/find.php";</script>'; 
        exit;
    }
} else {
    echo "Error: " . mysqli_error($conn);
}
}
}
// Close the connection
mysqli_close($conn);
    



?>

<style>
	.alert {
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  width: 100%;
  
  margin-right: auto;
}

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}
</style>