<?php
include_once ('db.php');

if(isset($_POST['submit'])){
    $option = $_POST['option'];
    $name = $_POST['name'];
    $date =$_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $imagename = $_FILES['image']['name'];
    $imagetmpname = $_FILES['image']['tmp_name'];
    $folder ='../imageUpload/';

    move_uploaded_file($imagetmpname,$folder.$imagename);
}


$sql = "INSERT INTO 'ticket'('option','name','date','time','location','description','image')
		VALUES('$option','$name','$date','$time','$location','$description','$imagename')";

$result = mysqli_query($conn, $sql);
if ($result) {
	echo "Registred successfully";
} else {
	die(mysqli_error($conn));
}

mysqli_close($conn);

?>