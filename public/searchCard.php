
<head>
	<script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</head>


<?php
	require('../src/modules/db.php');
    $query = "SELECT * FROM ticket";
    $result = mysqli_query($conn, $query);
    $counter = mysqli_num_rows($result);

    $_SESSION["counter"] = $counter;
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-md-6 col-lg-4">
            <div class="card <?php echo $_SESSION["dark_mode"]!="null" ? '' : 'card-light'; ?>">
                <h1 class="card-title"><?php echo $row['event_title']?></h1>
            
                <div class="card-body">
                    <div class="date <?php echo $_SESSION["dark_mode"]!="null" ? '' : 'icon-light'; ?>">
                        <?php echo file_get_contents('assets/icons/calendar.svg') ?>
                        <div class="info">
                            <p class="primary">Date</p>
                            <p class="secondary"><?php echo $row['date']?></p>
                        </div>
                    </div>
                    <div class="location <?php echo $_SESSION["dark_mode"]!="null" ? '' : 'icon-light'; ?>">
                        <?php echo file_get_contents('assets/icons/location.svg') ?>
                        <div class="info">
                            <p class="primary"><?php echo $row['location']?></p>
                        </div>
                    </div>
                </div>

                <hr>
            
                <div class="card-bottom">
                    <p class="type"><?php echo $row['option']?></p>
                    <button class="card-button" data-ticket-id="<?php echo $row['tid']; ?>" >Add  </button>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <script>
    $(document).ready(function() {
    $('.card-button').click(function() {
        var userId = $(this).data('user-id');
        var ticketId = $(this).data('ticket-id');

        $.ajax({
            url: '../src/modules/addticket.php',
            method: 'POST',
            data: { userId: userId, ticketId: ticketId },
            success: function(response) {
                console.log(response);
            },
            error: function() {
                console.log('Error occurred during AJAX request.');
            }
        });
    });
});
    </script>
