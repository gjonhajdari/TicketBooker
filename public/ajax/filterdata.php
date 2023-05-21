<?php session_start(); ?>
<?php include("configdata.php"); ?>


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
   
    <title>Fetching data -- available for users</title>


    <style>
        body {
        background-color: #222222;
	    background-repeat: no-repeat;
        background-position: -300px -100px
        }

        .container {
	    margin-top: 100px;
	    margin-bottom: 100px;
        }

        .container .title{
            font-weight:bold;
            font-size: 1.75rem;
	        margin-bottom: 0.3rem;
            color:#ffffff;}

        
        .container p{
            font-size: 1.25rem;
	        margin-bottom: 0.7rem;
            color: #ffffff7f;}

        .container span{
            color: #d45161;
        }

        .container .bottom{
            color: #ffffff7f;
            font-size: 1.15rem;
        }

        #fetchdata{
            font-size: 1.15rem;
	        font-weight: 600;
	        border-radius: 1rem;
	        border: none;
            background-color: #d45161;	        
            margin-top: 1rem;
            padding:6px;
            margin-bottom: 1.15rem;
            cursor:pointer;
        }


    </style> 
</head>

<body class="<?php echo $isDark ? '' : 'body-light'; ?>">
    <main class="container"> 
    <div id="filter">

        <p class="title">Having trouble booking tickets online for the first time?</p><br>
        <p><span> No problem, we've got you covered. </span>
            Here you will be able to track all your recent purchases!</p>
        <p class="bottom"> From traveling <span> tickets </span> to <span> concerts </span> and <span> movies </span>, get your latest info here </p>
       
        <select id="fetchdata">
            <option value="" disabled="" selected="">Take a look at your tickets</option>
            <option value="Movie">Movie</option>
            <option value="Travel">Travel</option>
            <option value="Concert">Concert</option>
        </select>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-borderless table-light">
            <thead class="table-dark">
                <tr class="rows" >
                    <div class="d-flex align-items-center">
                    <td scope="col" class="table-secondary">Ticket ID</td>
                    <td scope="col" class="table-secondary">Creator ID</td>
                    <td scope="col" class="table-secondary">Ticket type</td>
                    <td scope="col" class="table-secondary">Title</td>
                    <td scope="col" class="table-secondary">Date</td>
                    <td scope="col" class="table-secondary">Time Start</td>
                    <td scope="col" class="table-secondary">Time End</td>
                    <td scope="col" class="table-secondary">Location</td>
                    <td scope="col" class="table-secondary">Description</td>
                    <td scope="col" class="table-secondary">Image</td>
                    </div>
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
                <td><?php echo $row['description'] ?></td>
                <td><img src="<?php echo $row['image'] ?>" class="img-responsive img-thumbnail" width="150"> </td>
             </tr>
             <?php
             }
             ?>

            </tbody>
        </table>
        
    </div>
    </main>

    <script>
        $(document).ready(function(){
            $("#fetchdata").on('change',function(){
                var value = $(this).val();
                //alert(value);

                $.ajax({
                    url: "fetchdata.php",
                    type: "POST",
                    data: 'request=' + value,
                    beforeSend: function(){
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