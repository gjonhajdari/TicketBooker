<?php

sleep(1);

include("configdata.php");
if(isset($_POST['request'])){

    $request = $_POST['request'];
    $query = "SELECT * FROM ticket t INNER JOIN `user_ticket` us on t.tid = us.ticket_id WHERE `option` = '$request'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
}

?>

<table class="table table-hover table-borderless table-light">
    <?php 
    
        if ($count){
    
    ?>
    <thead class="table-light">
    <tr>
     <div class="d-flex align-items-center">
        <td scope="col" class="table-secondary">Ticket ID</td>
        <td scope="col" class="table-secondary">Option</td>
        <td scope="col" class="table-secondary">Location</td>
        <td scope="col" class="table-secondary">Date</td>
        <td scope="col" class="table-secondary">Time</td>
        <td scope="col" class="table-secondary">Event Title</td>
        <td scope="col" class="table-secondary">Description</td>
     </div>    
    </tr>
            
    <?php 
     } else{
            echo "No records found!";
     }


     ?>
    </thead>

    <tbody>
        <?php 
        while($row = mysqli_fetch_assoc($result)){
        
         ?>   
        <tr>
            <td ><?php echo $row['tid'] ?></td>
            <td><?php echo $row['option'] ?></td>
            <td><?php echo $row['location'] ?></td>
            <td><?php echo $row['date'] ?></td>
            <td><?php echo $row['time']?></td>
            <td><?php echo $row['event_title']?></td>
            <td><?php echo $row['description'] ?></td>
        </tr>

        <?php 
        
        }

        ?>
    </tbody>   
</table>

<button id="butoni" onclick="goBack()">Go back to Profile</button>

    <script>
        
        function goBack(){
            location.replace("/TicketBooker/public/profile.php");
        }
    </script>    

    <style>
        #butoni{
            font-size: 1.10rem;
	        font-weight: 500;
	        border-radius: 1rem;
	        border: none;
            background-color: #d45161;	        
            margin-top: 1rem;
            padding:8px;
            margin-bottom: 1.15rem;
        }

    </style>    

<?php 

?>