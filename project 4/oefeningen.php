<?php
 
require('./includes/autoloader.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['toevoegen'])) {
  if (isset($_SESSION['id'])) {
    $query = $db->prepare('INSERT INTO logboek (gebruiker, oefening, reps, datum) VALUES (:gebruiker, :oefening, :reps, :datum)');
    $query->execute(array(
      ':gebruiker' => $_SESSION['id'],
      ':oefening' => $_POST['toevoegen'],
      ':reps' => $_POST['reps'],
      ':datum' => date('Y-m-d')
    ));
  }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Registreren</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script src="main.js"></script>
</head>

<body>
    <style>
        body {
            background-image: url('img/achtergrond.jpg');
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>


    <?php require('menu.php'); ?>

    <div class="wrapper">
      <form method="POST">
        <div class="tile job-bucket">
          <div class="front">
            <div class="contents">
              <img src="./img/pushup.jpg"/>
              <h3>Push Ups</h3>
              <p>"De push-up is misschien wel de oudste oefening die de mens heeft bedacht om zijn lichaam sterker te maken."</p>
              <br>
              <a class="bekijken" href="pushups.php">Oefening bekijken</a>
            </div>
          </div>
          <div class="back">
            <h3>Informatie</h3>
            <p>Moeilijkheidsgraad: Beginner</p>
            <p>verbrande calorieën per set van 10 push ups - 30cal </p>
            <p>Met push ups train je niet alleen je borst, maar ook je biceps, triceps en schouders.</p>
            <?php
            if (isset($_SESSION['id'])) {
              echo '<input name="reps" type="number" class="form-control"><button value="1" type="submit" name="toevoegen" id="oefeningenknop" class="btn btn-primary">Toevoegen</button>';
            }
            ?>
          </div>
        </div>
        </form>
        <form method="POST">  
        <div class="tile job-bucket">
          <div class="front">
            <div class="contents">
              <img src="./img/situps.jpg"/>
              <h3>Sit Ups</h3>
              <p>"Wanneer je denkt aan trainen van de buikspieren is de kans groot dat je ook meteen denkt aan de sit up."</p>
              <br>
              <a class="bekijken" href="situps.php">Oefening bekijken</a>
            </div>
          </div>
          <div class="back">
            <h3>Informatie</h3>
            <p>Moeilijkheidsgraad: Beginner</p>
            <p>verbrande calorieën per set van 20 Sit Ups - 20cal </p>
            <p>Met Sit Ups train je Buikspieren</p>
            <?php
            if (isset($_SESSION['id'])) {
              echo '<input name="reps" type="number" class="form-control"><button value="2" type="submit" name="toevoegen" id="oefeningenknop2" class="btn btn-primary">Toevoegen</button>';
            }
            ?>
          </div>
        </div>
        </form>
      <form method="POST">
        <div class="tile job-bucket">
          <div class="front">
            <div class="contents">
              <img src="./img/schouders.jpg"/>
              <h3>Schouders</h3>
              <p>"Als je brede schouders wilt krijgen die opvallen dan mag de lateral shoulder raise zeker niet uitblijven."</p>
              <br>
              <a class="bekijken" href="schouders.php">Oefening bekijken</a>
            </div>
          </div>
          <div class="back">
            <h3>Informatie</h3>
            <p>Moeilijkheidsgraad: Beginner</p>
            <p>verbrande calorieën per set van 15 raises - 20cal </p>
            <p>Met lateral shoulder raise train je de schouders.</p>
            <?php
            if (isset($_SESSION['id'])) {
              echo '<input name="reps" type="number" class="form-control"><button value="3" type="submit" name="toevoegen" id="oefeningenknop3" class="btn btn-primary">Toevoegen</button>';
            }
            ?>
          </div>
        </div>
        </form>
      <form method="POST">
        <div class="tile job-bucket">
          <div class="front">
            <div class="contents">
              <img src="./img/lunges.jpg"/>
              <h3>Lunges</h3>
              <p>"Lunges, ook wel de uitvalspas genoemd, is een fitnessoefening waarmee je de quadriceps en bilspieren traint."</p>
              <br>
              <a class="bekijken" href="lunges.php">Oefening bekijken</a>
            </div>
          </div>
          <div class="back">
            <h3>Informatie</h3>
            <p>Moeilijkheidsgraad: Beginner</p>
            <p>verbrande calorieën per set van 20 - 35cal </p>
            <p>lunges is een fitnessoefening waarmee je de quadriceps en bilspieren traint.</p>
            <?php
            if (isset($_SESSION['id'])) {
              echo '<input name="reps" type="number" class="form-control"><button value="4" type="submit" name="toevoegen" id="oefeningenknop" class="btn btn-primary">Toevoegen</button>';
            }
            ?>
          </div>
        </div>
        </form>
      <form method="POST">
        <div class="tile job-bucket">
          <div class="front">
            <div class="contents">
              <img src="./img/pullup.jpg"/>
              <h3>Pull Ups</h3>
              <p>"Optrekken, ook wel pull-up of chin-up genoemd, is een oefening om vooral de armen en rugspieren te trainen."</p>
              <br>
              <a class="bekijken" href="pullups.php">Oefening bekijken</a>
            </div>
          </div>
          <div class="back">
            <h3>Informatie</h3>
            <p>Moeilijkheidsgraad: Ervaren</p>
            <p>verbrande calorieën per set van 10 - 30cal </p>
            <p>Hoewel je met deze oefening ook je rug traint, legt het meer de nadruk op je biceps.</p>
            <?php
            if (isset($_SESSION['id'])) {
             echo '<input name="reps" type="number" class="form-control"><button value="5" type="submit" name="toevoegen" id="oefeningenknop" class="btn btn-primary">Toevoegen</button>';
            }
            ?>
          </div>
        </div>
        </form>
      <form method="POST">
        <div class="tile job-bucket">
          <div class="front">
            <div class="contents">
              <img src="./img/squats.jpg"/>
              <h3>SQUATS</h3>
              <p>"Het vrijstaand lichaamsgewicht squatten is een variant die je zonder gewichten thuis kunt doen."</p>
              <br>
              <a class="bekijken" href="squats.php">Oefening bekijken</a>
            </div>
          </div>
          <div class="back">
            <h3>Informatie</h3>
            <p>Moeilijkheidsgraad: Medium</p>
            <p>verbrande calorieën per set van 10 - 25cal </p>
            <p>Hoewel het squatten gezien wordt als ‘been oefening’, is het een oefening die elke spiergroep in je lichaam aanspreekt.</p>
            <?php
            if (isset($_SESSION['id'])) {
             echo '<input name="reps" type="number" class="form-control"><button value="6" type="submit" name="toevoegen" id="oefeningenknop6" class="btn btn-primary">Toevoegen</button>';
            }
            ?>
          </div>
        </div>
        </form>
      <form method="POST">
        <div class="tile job-bucket">
          <div class="front">
            <div class="contents">
              <img src="./img/triceps.jpg"/>
              <h3>TRICEPS DIPS</h3>
              <p>"Dippen is een heerlijk eenvoudige oefening die je overal kunt doen om je triceps te trainen. Ben er allereerst zeker van dat je kan dippen."</p>
              <br>
              <a class="bekijken" href="tricepdips.php">Oefening bekijken</a>
            </div>
          </div>
          <div class="back">
            <h3>Informatie</h3>
            <p>Moeilijkheidsgraad: Beginner</p>
            <p>verbrande calorieën per set van 10 - 20cal </p>
            <p>Met deze oefening train je de triceps.</p>
            <?php
            if (isset($_SESSION['id'])) {
             echo '<input name="reps" type="number" class="form-control"><button value="7" type="submit" name="toevoegen" id="oefeningenknop7" class="btn btn-primary">Toevoegen</button>';
            }
            ?>
          </div>
        </div>
        </form>
      <form method="POST">
        <div class="tile job-bucket">
          <div class="front">
            <div class="contents">
              <img src="./img/burpees.jpg"/>
              <h3>Burpees</h3>
              <p>"Deze veelzijdige oefening is ideaal om vanuit de woonkamer fitter worden.."</p>
              <br>
              <a class="bekijken" href="burpees.php">Oefening bekijken</a>
            </div>
          </div>
          <div class="back">
            <h3>Informatie</h3>
            <p>Moeilijkheidsgraad: Medium</p>
            <p>verbrande calorieën per set van 10 - 30cal </p>
            <p>Primaire spiergroep: quadriceps / Secundaire spiergroepen: bilspieren, hamstrings, pectoralis, biceps, triceps.</p>
            <?php
            if (isset($_SESSION['id'])) {
              echo '<input name="reps" type="number" class="form-control"><button value="8" type="submit" name="toevoegen" id="oefeningenknop8" class="btn btn-primary">Toevoegen</button>';
            }
            ?>
          </div>
        </div>
        </form>
      <form method="POST">
        <div class="tile job-bucket">
          <div class="front">
            <div class="contents">
              <img src="./img/airbike.jpg"/>
              <h3>Air Bike</h3>
              <p>"De abdominal air bike of kortweg air bike (luchtfiets) is een effectieve buikspieroefening waarbij je de gebieden bovenin en onderin van de buikspieren kunt trainen."</p>
              <br>
              <a class="bekijken" href="airbike.php">Oefening bekijken</a>
            </div>
          </div>
          <div class="back">
            <h3>Informatie</h3>
            <p>Moeilijkheidsgraad: Beginner</p>
            <p>verbrande calorieën per set van 20 - 20cal </p>
            <p>Primaire spiergroep: Buikspieren.</p>
            <?php
            if (isset($_SESSION['id'])) {
              echo '<input name="reps" type="number" class="form-control"><button value="9" type="submit" name="toevoegen" id="oefeningenknop9" class="btn btn-primary">Toevoegen</button>';
            }
            ?>
          </div>
        </div>
        </form>
      <form method="POST">
        <div class="tile job-bucket">
          <div class="front">
            <div class="contents">
              <img src="./img/crunch.jpg"/>
              <h3>CRUNCH</h3>
              <p>"De Plank is een isometrische oefening vooral gericht op de rechte buikspieren de dwarse buikspier en de diepliggende rugspieren."</p>
              <br>
              <a class="bekijken" href="crunch.php">Oefening bekijken</a>
            </div>
          </div>
          <div class="back">
            <h3>Informatie</h3>
            <p>Moeilijkheidsgraad: Beginner</p>
            <p>verbrande calorieën per set 15 - 20cal </p>
            <p>Trainen van het onderste deel van de rechte buikspieren.</p>
            <?php
            if (isset($_SESSION['id'])) {
              echo '<input name="reps" type="number" class="form-control"><button value="10" type="submit" name="toevoegen" id="oefeningenknop10" class="btn btn-primary">Toevoegen</button>';
            }
            ?>
          </div>
        </div>
      </div>
      </form>


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