<html>
<head>
<title>Guessing Game by MD SHOHANOOR RAHMAN 6313a4d8</title>
</head>
<body>
<h1>Hello! Welcome to my Guessing-Game</h1>
<p>
<?php
  if ( ! isset($_GET['guess']) ) { 
    echo("Missing guess parameter");
  } else if ( strlen($_GET['guess']) ==0 ) {
    echo("Your guess is too short");
  } else if (  is_numeric($_GET['guess'])!=TRUE ) {
    echo("Your guess is not a number");
  } else if ( $_GET['guess'] < 67  ) {
    echo("Your guess is too low");
  } else if ( $_GET['guess'] > 67 ) {
    echo("Your guess is too high");
  } else if ( $_GET['guess'] == 67 ) {
    echo("Congratulations - You are right");
  }
?>
</p>
</body>
</html>
  