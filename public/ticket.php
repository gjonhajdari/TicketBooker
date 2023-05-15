<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Add</title>

</head>

<body>
    <!-- Navigation Bar -->
    <?php include "../src/templates/navbar.php"; ?>

    <form action="../src/modules/ticketConnect.php" method="POST" enctype="multipart/form-data">
        <select name="option" id="select-what">
            <option name="select" value="">Select Option</option>
            <option name="movie" value="Movie">Movie</option>
            <option name="travel" value="Travel">Travel</option>
            <option name="concert" value="Concert">Concert</option>
        </select>
        <br><br>
        <div id="name">
            <input type="text" name="name" required="required" placeholder="Name or Destinaton" class="input">
            <i class="fa-solid fa-eye-slash" id="toggle-visibility"></i>
        </div>
        <br>
        <div id="date">
            <input type="text" name="date" required="required" placeholder="Date: yyyy-mm-dd" class="input">
            <i class="fa-solid fa-eye-slash" id="toggle-visibility"></i>
        </div>
        <br>
        <div id="time">
            <input type="text" name="time" required="required" placeholder="Time: hh:mm" class="input">
            <i class="fa-solid fa-eye-slash" id="toggle-visibility"></i>
        </div>
        <br>
        <div id="Location">
            <input type="text" name="location" required="required" placeholder="Location" class="input">
            <i class="fa-solid fa-eye-slash" id="toggle-visibility"></i>
        </div>
        <br>
        <div id="description">
            <input type="text" name="description" placeholder="Description(not required)" class="input">
            <i class="fa-solid fa-eye-slash" id="toggle-visibility"></i>
        </div>
        <br>
        <div id="photo">
            <input type="file" name="image">
            <i class="fa-solid fa-eye-slash" id="toggle-visibility"></i>
        </div>

        <br>
        <input type="submit" name="submit" id="button" class="btn">
    </form>


    <?php include "../src/templates/footer.php"; ?>



</body>

</html>