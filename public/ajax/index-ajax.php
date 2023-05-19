<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='../assets/icons/favicon.svg'>
	<?php
		if (($_SESSION["login"]==true) && ($_SESSION['dark_mode'] != "null")) {
			echo "<link rel='stylesheet' href='css/palette-dark.css'>";
		} else if(($_SESSION["login"]==true) && ($_SESSION['dark_mode'] == "null")){
			echo "<link rel='stylesheet' href='css/palette-light.css'>";
		}else{
			echo "<link rel='stylesheet' href='css/palette-dark.css'>";
		}
	?>

	<link rel="stylesheet" href="public/ajax/index-ajax.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"> </script>
    
    <title>Getting data from database</title>

    <style>

        body {
        display: flex;
        background-color: #222222;
	    background-repeat: no-repeat;
	    background-position: -300px -100px;
    	/* height: 100vh; */
        }

        .container {
	    margin-top: 100px;
	    margin-bottom: 100px;
        }


        .top h1 {
            font-size: 2.5rem;
	        color: var(--text-secondary); }

        .accent{
            color: #d45161;
        }
        .top #title{
            font-size: 2.75rem;
	        margin-bottom: 1.25rem;
            color:#ffffff;
        }

        .top p{
            font-size: 1.15rem;
	        color: #ffffff7f;
	        margin-bottom: 15px;
        }

        .top #table{
            color:#ffffff;
        }

        

    </style>
</head>

<body class="<?php echo $isDark ? '' : 'body-light'; ?>">

<main class="container">

<div class="top">
			<h1 id="title"><bold>Welcome back, <?php echo  $_SESSION["name"]; ?></bold></h1>
			<p>Take a look at your history of <span class="accent"> tickets </span>saved in your Database.</p>
		</div>
    <table class="table table-striped table-hover table-light" >
        <thead class="thead-light">
        <tr class="rows">
            <th scope="col" class="table-secondary">Ticket ID</th>
            <th scope="col" class="table-secondary">Option</th>
            <th scope="col" class="table-secondary">Name</th>
            <th scope="col" class="table-secondary">Date</th>
            <th scope="col" class="table-secondary">Time</th>
            <th scope="col" class="table-secondary">Location</th>
            <th scope="col" class="table-secondary">Description</th>
            <th scope="col" class="table-secondary">Image</th>
        </tr>
        </thead>
        <tbody id="mydata">

        </tbody>
    </table>
    </main>


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
    
    

</body>
</html>

 <!-- index-ajax.php connected with data.php--> 