<?php

require('./includes/autoloader.php');




?>
<!doctype html>
<html lang="en">

<head>
  <title class="title">Inloggen</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

  .fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}
</style>

</head>

<body>

<?php require('menu.php'); ?>


  <section id="cover">
    <div id="cover-caption">
      <div id="container" class="container">
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['inloggen'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $query = $db->prepare('SELECT * FROM users WHERE email = :email');
            $query->execute(array(
              ':email' => $_POST['email']
            ));
            //inloggen
            if ($query->rowCount() > 0) {
              while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                if (password_verify($_POST['password'], $row['password'])) {
                  $_SESSION['id'] = $row['id'];
                  header('Refresh:0; url=oefeningen.php');
                }else {
                  echo '<div class="alert alert-warning" role="alert">Wachtwoord komt niet overeen met het bestaande email adres!</div>';
                }
              }
            }else {
              echo '<div class="alert alert-warning" role="alert">Uw email komt niet voor in ons systeem!</div>';
            }
        }else {
          echo '<div class="alert alert-warning" role="alert">Niet alle velden zijn ingevuld!</div>';
        }
      }
      ?>
        <div class="row">
          <div class="col-sm-6 offset-sm-3 text-center">
            <h1 class="display-4">Inloggen</h1>
            <div class="info-form">
              <form method="POST">
                <div class="form-group">
                  <label for="InputEmail">Email address</label>
                  <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp"
                    placeholder="Voer uw e-mail adres in." name="email">
                </div>
                <div class="form-group">
                  <label for="InputPassword1">Wachtwoord</label>
                  <input type="password" class="form-control" id="InputPassword" placeholder="Voer uw wachtwoord in."
                    name="password">
                  <small id="emailHelp" class="form-text text-muted">Maximaal 72 karakters te gebruiken..</small>
                </div>
                <button name="inloggen" type="submit" class="btn btn-primary btn-lg btn-block" id="savebutton">Inloggen</button>
              </form>
            </div>
            <br>

            <a href="registreren.php" class="btn btn-outline-secondary btn-sm" role="button" id="knop">
              Nog Geen account?<br>Registreer NU!
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>



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

    <div class="footer">

<div class="container">
<div class="row">
  <div class="col-sm">
        
  </div>
  <div class="col-sm" id="footertext">
  <p>  ExerciseMe /
       klas : 4AM1C -
       2019</p>
  </div>
  <div class="col-sm" id="socialmedia">
  <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
    <a href="https://www.twitter.com" class="fa fa-twitter"></a>
    <a href="https://www.google.com" class="fa fa-google"></a>
  </div>
</div>
</div>
</div>



</body>
</html>