<?php
    require('../src/modules/db.php');
    if ($_SESSION['id']) {
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM `user` WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $user_type = $user['user_type'];
        $isLoggedIn = true;
    } else {
        $isDark = true;
        $isLoggedIn = false;
    }

    // Get the user's tickets
    $query = "SELECT ut.ticket_id, t.date, t.time, t.location, t.event_title
              FROM user_ticket ut 
              INNER JOIN ticket t ON ut.ticket_id = t.tid 
              WHERE ut.user_id = '$id'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $ticketId = $row['ticket_id'];
        $date = $row['date'];
        $time = $row['time'];
        $location = $row['location'];
        $event_title = $row['event_title']

        ?>
        <div class="col-md-6 col-lg-4">
            <div class="card <?php echo $isDark ? '' : 'card-light'; ?>">
                <div class="card-body">
				<h1 class="card-title"><?php echo $event_title?></h1>
                    <div class="date <?php echo $isDark ? '' : 'icon-light'; ?>">
                        <?php echo file_get_contents('assets/icons/calendar.svg') ?>
                        <div class="info">
                            <p class="primary"><?php echo $date; ?></p>
                            <p class="secondary"><?php echo $time; ?></p>
                        </div>
                    </div>
                    <div class="location <?php echo $isDark ? '' : 'icon-light'; ?>">
                        <?php echo file_get_contents('assets/icons/location.svg') ?>
                        <div class="info">
                            <p class="primary"><?php echo $location; ?></p>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="card-bottom">
            <p class="type"><?php echo $type; ?></p>
			<button class="trash"> 
                <?php echo file_get_contents('assets/icons/trash.svg') ?>
            </button>
        </div>
            </div>
        </div>
        <?php
    }
?>
<script>
$(document).ready(function() {
  // Handle the button click event
  $(".trash").click(function() {
    // Get the ticket ID (tid) and user ID (id)
    var ttid = "<?php echo $_SESSION['tid']; ?>";
    var tid = "<?php echo $_SESSION['id']; ?>";

    // Make the AJAX request
    $.ajax({
      url: "../src/modules/deleteticket.php", 
      method: "POST",
      data: {
        ttid: ttid,
        tid: tid
      },
      success: function(response) {
        console.log(response);
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });
});
</script>

