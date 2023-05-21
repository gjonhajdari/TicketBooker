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
    $query = "SELECT ut.ticket_id, t.date, t.time, t.location 
              FROM user_ticket ut 
              INNER JOIN ticket t ON ut.ticket_id = t.tid 
              WHERE ut.user_id = '$id'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $ticketId = $row['ticket_id'];
        $date = $row['date'];
        $time = $row['time'];
        $location = $row['location'];

        // Display the ticket information
        ?>
        <div class="col-md-6 col-lg-4">
            <div class="card <?php echo $isDark ? '' : 'card-light'; ?>">
                <div class="card-body">
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
                    <p class="type">Ticket ID: <?php echo $ticketId; ?></p>
                </div>
            </div>
        </div>
        <?php
    }
?>
