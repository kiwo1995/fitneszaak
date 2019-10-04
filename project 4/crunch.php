<!doctype html>
<html lang="en">
<?php 
require('./includes/autoloader.php');

?>

<head>
  <title>Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <style>
        body {
      background-image: url('img/achtergrond.jpg');
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

  .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
  }
</style>
</head>

<body>

<nav id="navbar1" class="navbar navbar-expand-lg bg-primary rounded 1">
        <a class="navbar-brand" href="index.php">ExerciseMe</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="registreren.php">Registreren</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Inloggen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="oefeningen.php">Oefeningen</a>
            </li>
        </ul>
    </nav>

    <div class="card" style="width: 35rem;" id="oefeningencard">
  <img class="card-img-top" src="./img/crunch.jpg" width="560" height="315" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Crunch</h5>
    <p class="card-text"><b>Uitvoering Crunch</b><br>
1.Ga liggen op een fitnessmat<br>
2.Breng de benen omhoog en houdt de knieën in een hoek van 90 graden.<br>
3.Plaats de handen op de borst (of leg de handen onder het hoofd, trek niet aan de nek!)<br>
4.Breng het hoofd, de schouders en de borst omhoog richting de knieën.<br>
5.Kijk naar een vaste plek op het plafond en houdt de kin weg van de borst.<br>
6.Breng het hoofd, de schouders en de borst weer naar beneden en herhaal voor het gewenste aantal herhalingen.<br>
  </div>
  <a href="http://www.project4project4.org/oefeningen.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Ga terug</a>
  </div>

<div class="footer">
  <p>  ExerciseMe /
  klas : 4AM1C -
  2019</p>
</div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>



</html>