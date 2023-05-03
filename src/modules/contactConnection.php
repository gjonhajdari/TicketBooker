<?php

require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
	$conn or die("Connection failed: ".mysqli_connect_error());

	if (isset($_POST['fname']) && isset($_POST['femail'])&& isset($_POST['fmessage'])) {
		$fname = $_POST['fname'];
		$femail = $_POST['femail'];
		$fmessage = $_POST['fmessage'];

		$sql = "INSERT INTO 'contact'('name','email','message')
				VALUES('$fname','$femail','$fmessage')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo "Data registred successful";
		} else {
			die(mysqli_error($conn));
		}
	}
}

mysqli_close($conn);

?>