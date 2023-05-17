<?php
require('../src/modules/db.php');

        $sql = "SELECT * FROM `ticket`";
		$result = mysqli_query($conn, $sql);
        $ticket = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $_SESSION["ticket"] = true;
				$_SESSION["tid"] = $ticket["tid"];
				$_SESSION["option"] = $ticket["optionn"];
				$_SESSION["ticketname"] = $ticket["name"];
                $_SESSION["date"] = $ticket["date"];
                $_SESSION["time"] = $ticket["time"];
                $_SESSION["location"] = $ticket["location"];
                $_SESSION["description"] = $ticket["description"];
                $_SESSION["image"] = $ticket["image"];

?>