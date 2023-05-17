<?php
	require('../src/modules/db.php');
    // Retrieve the data from the database
    $query = "SELECT * FROM ticket";
    $result = mysqli_query($conn, $query);

    // Loop through the result set and display the data on the web page
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-md-6 col-lg-4">
            <div class="card <?php echo $_SESSION["dark_mode"]!="null" ? '' : 'card-light'; ?>">
                <h1 class="card-title"><?php echo $row['name']?></h1>
            
                <div class="card-body">
                    <div class="date <?php echo $isDark ? '' : 'icon-light'; ?>">
                        <?php echo file_get_contents('assets/icons/calendar.svg') ?>
                        <div class="info">
                            <p class="primary">Date</p>
                            <p class="secondary"><?php echo $row['date']?></p>
                        </div>
                    </div>
                    <div class="location <?php echo $isDark ? '' : 'icon-light'; ?>">
                        <?php echo file_get_contents('assets/icons/location.svg') ?>
                        <div class="info">
                            <p class="primary"><?php echo $row['location']?></p>
                        </div>
                    </div>
                </div>

                <hr>
            
                <div class="card-bottom">
                    <p class="type"><?php echo $row['optionn']?></p>
                    <button class="card-button">Add</button>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
