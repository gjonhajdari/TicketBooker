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
                <h1 class="card-title"><?php echo $row['name']?></h1>
            
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
                    <button class="card-button">Add</button>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
