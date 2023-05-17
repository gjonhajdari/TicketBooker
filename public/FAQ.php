<?php
//TODO write code for sessions in FAQ
$isDark = true;
$isLoggedIn = true;
$avatar = 10;
$full_name = 'Gjon Hajdari';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Navigation bar -->
  <?php include "../src/templates/navbarLoggedin.php"; ?>


  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="Bootstrap" href="Bootstrap">
  <title>FAQ</title>
  <?php
  if ($isDark == true) {
    echo "<link rel='stylesheet' href='css/palette-dark.css'>";
  } else {
    echo "<link rel='stylesheet' href='css/palette-light.css'>";
  }
  ?>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/general.css">
  <link rel="stylesheet" href="css/createTicket.css">
  <link rel="stylesheet" href="css/FAQ.css">
  <script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
 
  

  
</head>

<body>
<script >

$(document).ready(function() {
    $('.QuestionBlock').click(function() {
      var DropDownElement = $(this).find('.QuestionDropDown');
      DropDownElement.slideToggle();
      var LocateFigure=$(this).find('.DropDown');
      LocateFigure.toggleClass('Rotate');
      Locate.animate();
     

    });
  });

  </script>
<!-- WILL BE FIXED TE MERKUREN!!-->
  <div class="Container">
    <div class="ContainerParagraph">
      <p style="font-size:2.5rem; padding-top:80px; padding-bottom:10px;" >
        <b> Frequently Asked Questions </b>

        <br>
      <p id="Paragraph1">
           Got another question for us? <txt style="color: var(--accent)"> Contact us </txt> via email!
      </p>
      </p>
    </div>
    <br>
   
    <div class="QuestionBlock">
      <hr class="QuestionHr">
    
    <div class="QuestionHolder">

    <p>
      Question #1
    </p>
    
    </div>

      <div class="QuestionImg">
        <img src="../public/assets/icons/dropdown.svg" alt="">
      </div>

    <hr class="QuestionHr">

    </div>


    <div class="QuestionDropDown">
        TicketBooker is a page that alows you to buy tickets from any concert,travel,movie that is avaliable in Kosovo!

    </div>



  </div>



   
  <?php
  // require_once('../src/modules/db.php');
  
  // $sql = "SELECT * FROM questions";
  // $result = mysqli_query($conn, $sql);
  
  // // Loop through the results and display each question and answer
  // if (mysqli_num_rows($result) > 0) {
  // while ($row = mysqli_fetch_assoc($result)) {
  // echo "<div class='question'>";
  // echo "<h3>" . $row['question'] . "</h3>";
  
  // // Display the answer if it exists
  // if ($row['answer']) {
  // echo "<div class='answer'>";
  // echo "<p>" . $row['answer'] . "</p>";
  // echo "</div>";
  // }
  
  // echo "</div>";
  // }
  // } else {
  // echo "No questions found.";
  // }
  
  // Close the statement
  // mysqli_stmt_close($stmt);
  // mysqli_close($conn);
  // Show a success message to the user
  // echo "Your question has been submitted. Thank you!";
  
  ?>


  <?php include "../src/templates/footer.php"; ?>

</body>

</html>