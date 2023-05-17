<?php session_start(); ?>
<?php include("condata.php"); ?>


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

	<link rel="stylesheet" href="/public/ajax/index-ajax.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"> </script>
    
</head>

<body>
    <div id="filter">

        <p>Having trouble booking tickets online for the first time? <br> No problem, we've got you covered.
            Here you will be able to track all your recent purchases!
        <p> From traveling <span> tickets </span> to <span> concerts </span> and <span> movies </span>, get your latest info here </p>
        <select id="fetchdata">
            <option value="" disabled="" selected="">Take a look at your tickets</option>
            <option value="Movie">Movie</option>
            <option value="Travel">Travel</option>
            <option value="Concert">Concert</option>
        </select>
    </div>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <td>Ticket ID</td>
                    <td>Creator ID</td>
                    <td>Ticket type</td>
                    <td>Title</td>
                    <td>Date</td>
                    <td>Time Start</td>
                    <td>Time End</td>
                    <td>Location</td>
                    <td>Description</td>
                    <td>Image</td>
                </tr>

            </thead>
            <tbody>
            <?php

             $query = "SELECT * FROM tickets";
             $r = mysqli_query($conn, $query);
             while($row = mysqli_fetch_assoc($r)){
             ?>   
             <tr>
                <td><?php echo $row['ticket_id'] ?></td>
                <td><?php echo $row['creator_id'] ?></td>
                <td><?php echo $row['ticket_type'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td><?php echo $row['time_start']?></td>
                <td><?php echo $row['time_end']?></td>
                <td><?php echo $row['location'] ?></td>
                <td><img src="<?php echo $row['description'] ?>" class="img-responsive img-thumbnail" width="150"> </td>
             </tr>
             <?php
             }
             ?>

            </tbody>
        </table>
        
    </div>

    <script>
        $(document).ready(function(){
            $("#fetchdata").on('change',function () {
                var value = $(this).val();
                //alert(value);

                $.ajax({
                    url: "condata.php",
                    type: "POST",
                    data: 'request=' + value,
                    beforeSend: function (){
                        $(".container").html("<span>Working...</span>"); 
                    },
                    success:function(data){
                        $(".container").html(data);
                    }
                })

              })

        });

    </script>


</body>

</html>