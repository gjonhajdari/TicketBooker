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

<table class="tabela">
    <?php 
    
        if ($count){
    
    ?>
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
<?php 

?>