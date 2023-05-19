<?php
include '../src/modules/db.php';
session_start();
if (!isset($_SESSION["login"]) || !$_SESSION["login"]) {
  // Redirect to sign-in page
  header("Location: login.php");
  exit();
}


if ($_SESSION['id']) {
	$id = $_SESSION['id'];
	$sql = "SELECT * FROM `user` WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$isDark = $user['dark_mode'];
	$avatar = $user['avatar'];
	$full_name = $user['name'];
	$user_type = $user['user_type'];
	$isLoggedIn = true;
} else {
	$isDark = true;
	$isLoggedIn = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    a{
      text-decoration: none;
    }
    a:visited {
    color: inherit;
    }
  </style>
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
           Got any other questions? <txt style="color: var(--accent)"><a href="contact.php"> Contact us</a> </txt>
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

      <div class="questionimg <?php echo $_SESSION["dark_mode"] ? '' : 'questionimg-light'; ?>" >
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
        TicketBooker is the first ever website in Kosovo where the citizens of Kosovo can book tickets all around Kosovo, starting from traveling
        tickets to movies and concerts!
    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          What kind of tickets can I buy?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
       We offer tickets from any concert, travel, movie that is avaliable in Kosovo.
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
        Yes, at TicketBooker we have a return policy where you may return your tickets to us for a full refund. 
        You can return the tickets within 30 days after your purchase! 

    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          Can I type any price that I want on the tickets I am selling?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
      Yes you technically can, but if the price is way above the market price of that ticket it will get taken down 
      and with a few warnings of ticket overpricing it may cause an account ban!  

    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          How much tickets can I create and sell at the same time?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
        You can create as many tickets as you want and sell them at the same time if you want to, 
        we don't prefer it because this might cause database problems!
    </div>


    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          Which type of tickets are created the most ?
        </p>
        
      </div>

      <div class="questionimg">
      <?php echo file_get_contents("assets/icons/dropdown.svg") ?>
      </div>

    </div>
  </div>
    <div class="questiondropdown">
      Our users mostly create and sell movie and travel tickets, 
      but that doesnt mean concert tickets aren't sold just not as much as the others. 
    </div>

    <div class="questionblock">
    <hr class="questionhr">
    <div class="questionoverlayer">
      <div class="questionholder">
        <p class="textparagraph">
          Do costumers get any discounts from buying more than 2-3 tickets?
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
      consectetur adipisicing elit.
      Alias officiis suscipit, a fugit similique neque,
      beatae est nostrum facere, nam error ut numquam architecto repudiandae? Eius vel ducimus repellat in.
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
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus soluta quisquam assumenda rem 
        totam excepturi a ipsam mollitia similique! Molestiae dolorum 
        commodi officia unde. Facilis hic explicabo voluptatum asperiores ipsum!

    </div>
    



  </div>
    
  <?php include "../src/templates/footer.php"; ?>

</body>

</html>