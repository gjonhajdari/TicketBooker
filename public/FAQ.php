<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
</head>
<body>
    <form action="php/FAQ.php" method="post">
        <input type="text" name="username_or_id" id="username_or_id" placeholder="Username or ID">
        <br>
        <input type="text" name="question" id="question" placeholder="Write your question">
        <br>
        <input type="submit" name="submit" id="button" class="btn">
    </form>



  <?php
  
  require_once('php/db.php');

  $sql = "SELECT * FROM questions";
$result = mysqli_query($conn, $sql);

// Loop through the results and display each question and answer
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='question'>";
        echo "<h3>" . $row['question'] . "</h3>";
        
        // Display the answer if it exists
        if ($row['answer']) {
            echo "<div class='answer'>";
            echo "<p>" . $row['answer'] . "</p>";
            echo "</div>";
        }
        
        echo "</div>";
    }
} else {
    echo "No questions found.";
}

    // Close the statement
    // mysqli_stmt_close($stmt);
    mysqli_close($conn);
    // Show a success message to the user
    // echo "Your question has been submitted. Thank you!";



  
  ?>
</body>
</html>