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
  if ($_SESSION["dark_mode"] == "null") {
    echo "<link rel='stylesheet' href='css/palette-light.css'>";
  } else {
    echo "<link rel='stylesheet' href='css/palette-dark.css'>";
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
    $('.questionblock').click(function() {
      var DropDownElement = $(this).next('.questiondropdown');
      DropDownElement.slideToggle();
      var LocateFigure=$(this).find('.questionimg');
      LocateFigure.toggleClass('rotate');
      LocateFigure.animate();
      $(this).toggleClass('bg');
      
     

    });
  });

  </script>
  <div class="container">

    <div class="containerparagraph">
      <p style="font-size:2.5rem; padding-top:80px; padding-bottom:10px;" >
        <b> Frequently Asked Questions </b>

        <br>
      <p id="Paragraph1">
           Got another question for us? <txt style="color: var(--accent)"> Contact us </txt> via email!
      </p>
      </p>
    </div>
    <br>
   
    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          What is TicketBooker?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
        TicketBooker is a page that alows you to buy tickets from any concert,travel,movie that is avaliable in Kosovo!

    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          What kind of questions can i buy?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
       you can buy tickets  from any concert,travel,movie that is avaliable in Kosovo.
       If you have any other ideas that can help and make the page better, you can contact 
       us at the contact forum!

    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          Is there a return policy?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
        Yes there is a return policy that alows you to return any ticket that you have bought 
        in the last week that you have changed your mind on.
        Otherwise you cannot.

    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          Can i type any price that i want on the tickets im selling?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
      Yes you technically can, but if the price is way above the market price of that ticket it will get taken down 
      and with a few warnings of ticket overpricing may cause an account ban.  

    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          How much tickets can i create and sell at the same time?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
        You can create as many tickets as you want and sell them at the same time if you want to,
        we dont prefer it because there might be some database problems.
    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          Which type of tickets are  created the most ?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
      Our users mostly create and sell movie and travel tickets, 
      but that doesnt mean concert tickets arent sold just not as much as the other two. 
    </div>

    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          Do costumers get any disscounts from buying more than 2-3 tickets?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
        Yes our loyal costumers get 10% or more discount depending
         on how many tickets they have bought in the past year or so.

    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          What is TicketBooker?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex commodi numquam ad veritatis vitae, velit 
        rem error ipsum aperiam tempore delectus possimus dolores totam, aliquam tempora necessitatibus aut laborum culpa!
    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          What is TicketBooker?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
      Lorem ipsum dolor sit amet,
       consectetur adipisicing elit. Alias officiis suscipit, a fugit similique neque, beatae est nostrum facere, nam error ut numquam architecto repudiandae? Eius vel ducimus repellat in.
    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          What is TicketBooker?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
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