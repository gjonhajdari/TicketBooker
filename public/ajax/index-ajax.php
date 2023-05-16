<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='/public/assets/icons/favicon.svg'>
	

	<link rel="stylesheet" href="/public/ajax/index-ajax.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"> </script>
    
    <title></title>
</head>
<body class="<?php // echo $isDark ? '' : 'body-light'; ?>">



<div class="top">
			<h1 id="title">Welcome back, <?php echo $_SESSION["name"]; ?></h1>
			<p>Take a look at all the <span id="accebt"> new tickets </span>saved in your Database.</p>
		</div>
    <table class="table table-striped table-hover">
        <tr>
            <th>Ticket ID</th>
            <th>Option</th>
            <th>Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
        <tbody id="mydata">


        </tbody>
    </table>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"> </script>
    <script>
        $(document).ready(function () { 

            $.ajax({
                type: "GET",
                url: "data.php",
                dataType: "html",
                success: function(data){
                    $('#mydata').html(data);
                }
            });

         });

    </script>
    
    
    <!-- Footer -->
	<?php // include('../TicketBooker/src/templates/footer.php') ?>

</body>

</html>