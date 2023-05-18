<?php

sleep(1);

include("configdata.php");
if(isset($_POST['request'])){

    $request = $_POST['request'];
    $query = "SELECT * FROM tickets WHERE ticket_type = '$request' ";
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
            <td ><?php echo $row['ticket_id'] ?></td>
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
<?php 

?>