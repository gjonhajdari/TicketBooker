<?php
// Connect to the MySQL database
require_once('db.php');

// Check if the form has been submitted
if(isset($_POST['submit'])) {

    // Retrieve the answer and question ID from the form submission
    $question_id = $_POST['ID'];
    $answer = $_POST['answer'];

    // Update the corresponding question in the database with the answer
    $sql = "UPDATE questions SET answer='$answer' WHERE ID=$question_id";
    if (mysqli_query($conn, $sql)) {
        echo "Answer submitted successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Fetch the questions from the database
$sql = "SELECT * FROM questions";
$result = mysqli_query($conn, $sql);

// Display the questions to the admin along with a form to submit the answers
echo "<h2>Questions</h2>";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p><strong>Username or ID:</strong> " . $row["username_or_id"] . "</p>";
        echo "<p><strong>Question:</strong> " . $row["question"] . "</p>";
        
        // Display a form to submit the answer
        echo "<form action='' method='post'>";
        echo "<input type='hidden' name='ID' value='" . $row["ID"] . "'>";
        echo "<label for='answer'>Answer:</label>";
        echo "<textarea name='answer' id='answer' rows='4' cols='50'></textarea>";
        echo "<br>";
        echo "<input type='submit' name='submit' value='Submit Answer'>";
        echo "</form>";
        
        echo "<hr>";
    }
} else {
    echo "No questions to display.";
}

// // Retrieve all questions and answers from the database
// $sql = "SELECT * FROM questions";
// $result = mysqli_query($conn, $sql);

// // Loop through the results and display each question and answer
// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "<div class='question'>";
//         echo "<h3>" . $row['question'] . "</h3>";
        
//         // Display the answer if it exists
//         if ($row['answer']) {
//             echo "<div class='answer'>";
//             echo "<p>" . $row['answer'] . "</p>";
//             echo "</div>";
//         }
        
//         echo "</div>";
//     }
// } else {
//     echo "No questions found.";
// }

// Close the database connection
mysqli_close($conn);
?>
