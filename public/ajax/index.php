<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='icon' type='image/x-icon' href='/public/assets/icons/favicon.svg'>
    <title>Display data in real time</title>
    <script src="https://kit.fontawesome.com/26e97bbe8d.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>

</head>

<body onload="table();">
    <script type="text/javascript">
        function table() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function(){
                document.getElementById("table").innerHTML = this.responseText;
            }
            xhttp.open("GET", "system.php");
            xhttp.send();
          }
          setInterval(function(){
                table();
          },1)

    </script>
    <div id="table">

    </div>




</body>
</html>