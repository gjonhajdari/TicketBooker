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
    $query = "SELECT `tid`, `event_title`, `option`, `date`, `location` FROM `ticket` WHERE  `option` = '" . $_SESSION["option"] . "' AND `date` = '" . $_SESSION["date"] . "' AND `location` = '" . $_SESSION["location"] . "' ";
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
                    <button  class="card-button">Add </a> </button>
                </div>
            </div>
        </div>
    <?php
    }


    ?>
    <script>
$(document).ready(function() {
  // Handle the button click event
  $(".card-button").click(function() {
    // Get the ticket ID (tid) and user ID (id)
    var tid = "<?php echo $_SESSION['tid']; ?>";
    var id = "<?php echo $_SESSION['id']; ?>";

    // Make the AJAX request
    $.ajax({
      url: "../src/modules/addticket.php", 
      method: "POST",
      data: {
        tid: tid,
        id: id
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



