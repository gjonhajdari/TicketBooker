<?php
include_once('db.php');
$type = $_POST['type1'] ?? ''; 
$date = $_POST['date1'] ?? ''; 
$location = $_POST['location1']?? ''; 
$tid='';

$date = trim($date); 
$formattedDate = date("Y-m-d", strtotime($date)); 



$sql = "SELECT * FROM `ticket`;

$result = mysqli_query($conn, $sql);

if ($result) {
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $tid = $row['tid'];
            $option = $row['option'];
            $date = $row['date'];
            $location = $row['location'];
            $event_title = $row['event_title'];
           
            $_SESSION["tid"] = $tid;
            $_SESSION["option"] = $option;
            $_SESSION["date"] = $date;
            $_SESSION["location"] = $location;
            $_SESSION['event_title'] = $event_title;
        }
        echo '<script>window.location.href = "../public/find.php";</script>'; 
         exit;
    } else {
        echo '<script>window.location.href = "../public/error.php";</script>'; 
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