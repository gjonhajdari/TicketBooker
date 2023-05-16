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
    $('.AccordionText').click(function() {
      var Locate = $(this).find('.AccordionHiddenText');
      Locate.slideToggle();
      var LocateFigure=$(this).find('.DropDown');
      LocateFigure.toggleClass('rotate');

    });
  });
  </script>

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
    <div class="Accordion">
      <hr class="AccordionHr">
      <div class="AccordionText" id="AccordionTextid">
        What is TicketBooker?
        <div class="AccordionHiddenText" id="AccordionHiddenTextid1">
        TicketBooker is a page that alows you to buy tickets from any concert,travel,movie that is avaliable in Kosovo!
        </div>

        <div class="DropDown" id="DropDown1">
          <img src="assets/icons/dropdown.svg" alt="" class="Dropdown">
        </div>
      </div>
      <hr class="AccordionHr">
    </div>
    <div class="Accordion">
      <hr class="AccordionHr">
      <div class="AccordionText"  id="AccordionTextid">
        what kind of tickets can i buy?
        <div class="AccordionHiddenText " id="AccordionHiddenTextid2">
         TicketBooker focuses mostly on movies,concerts and travel tickets but 
         if there are any type of tickets that can help us inprove our page contact us!
        </div>

        <div class="DropDown" id="DropDown2">
          <img src="assets/icons/dropdown.svg" alt="" class="Dropdown">
        </div>
      </div>
      <hr class="AccordionHr">
    </div>

    <div class="Accordion">
      <hr class="AccordionHr">
      <div class="AccordionText"  id="AccordionTextid">
        is there a return policy?
        <div class="AccordionHiddenText " id="AccordionHiddenTextid3">
        TicketBooker is a page that alows you to buy tickets from any concert,travel,movie that is avaliable in Kosovo!
        </div>

        <div class="DropDown" id="DropDown3">
          <img src="assets/icons/dropdown.svg" alt="" class="Dropdown">
        </div>
      </div>
      <hr class="AccordionHr">
    </div>

    <div class="Accordion">
      <hr class="AccordionHr">
      <div class="AccordionText" id="AccordionTextid">
        Question #4
        <div class="AccordionHiddenText " id="AccordionHiddenTextid4">
        TicketBooker is a page that alows you to buy tickets from any concert,travel,movie that is avaliable in Kosovo!
        </div>

        <div class="DropDown" id="DropDown4">
          <img src="assets/icons/dropdown.svg" alt="" class="Dropdown">
        </div>
      </div>
      <hr class="AccordionHr">
    </div>

    <div class="Accordion">
      <hr class="AccordionHr">
      <div class="AccordionText"  id="AccordionTextid">
        Question #5
        <div class="AccordionHiddenText " id="AccordionHiddenTextid5">
        TicketBooker is a page that alows you to buy tickets from any concert,travel,movie that is avaliable in Kosovo!
        </div>

        <div class="DropDown" id="DropDown5">
          <img src="assets/icons/dropdown.svg" alt="" class="Dropdown">
        </div>
      </div>
      <hr class="AccordionHr">
    </div>

    <div class="Accordion">
      <hr class="AccordionHr">
      <div class="AccordionText"  id="AccordionTextid">
        Question #6
        <div class="AccordionHiddenText "id="AccordionHiddenTextid6">
        TicketBooker is a page that alows you to buy tickets from any concert,travel,movie that is avaliable in Kosovo!
        </div>

        <div class="DropDown" id="DropDown6">
          <img src="assets/icons/dropdown.svg" alt="" class="Dropdown">
        </div>
      </div>
      <hr class="AccordionHr">
    </div>

    <div class="Accordion">
      <hr class="AccordionHr">
      <div class="AccordionText"  id="AccordionTextid">
        Question #7
        <div class="AccordionHiddenText " id="AccordionHiddenTextid7">
        TicketBooker is a page that alows you to buy tickets from any concert,travel,movie that is avaliable in Kosovo!
        </div>

        <div class="DropDown" id="DropDown7">
          <img src="assets/icons/dropdown.svg" alt="" class="Dropdown">
        </div>
      </div>
      <hr class="AccordionHr">
    </div>
    
    <div class="Accordion">
      <hr class="AccordionHr">
      <div class="AccordionText"  id="AccordionTextid">
        Question #8
        <div class="AccordionHiddenText " id="AccordionHiddenTextid8">
        TicketBooker is a page that alows you to buy tickets from any concert,travel,movie that is avaliable in Kosovo!
        </div>

        <div class="DropDown" id="DropDown8">
          <img src="assets/icons/dropdown.svg" alt="" class="Dropdown">
        </div>
      </div>
      <hr class="AccordionHr">
    </div>

    <div class="Accordion">
      <hr class="AccordionHr">
      <div class="AccordionText"  id="AccordionTextid">
        Question #9
        <div class="AccordionHiddenText " id="AccordionHiddenTextid9">
        TicketBooker is a page that alows you to buy tickets from any concert,travel,movie that is avaliable in Kosovo!
        </div>

        <div class="DropDown" id="DropDown9">
          <img src="assets/icons/dropdown.svg" alt="" class="Dropdown">
        </div>
      </div>
      <hr class="AccordionHr">
    </div>
    
    <div class="Accordion">
      <hr class="AccordionHr">
      <div class="AccordionText"  id="AccordionTextid">
        Question #10
        <div class="AccordionHiddenText " id="AccordionHiddenTextid10">
        TicketBooker is a page that alows you to buy tickets from any concert,travel,movie that is avaliable in Kosovo!
        </div>

        <div class="DropDown" id="DropDown10">
          <img src="assets/icons/dropdown.svg" alt="" class="Dropdown">
        </div>
      </div>
      <hr class="AccordionHr">
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