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

<?php
require('menu.php');
?>

<div class="container">
<div style="margin-top: 30px;" class="card">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Oefening</th>
        <th scope="col">Aantal</th>
        <th scope="col">Caloriëen</th>
        <th scope="col">Datum</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = $db->prepare('SELECT * FROM logboek WHERE gebruiker = :gebruiker');
        $query->execute(array(
           ':gebruiker' => $_SESSION['id'] 
        ));

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

            $query1 = $db->prepare('SELECT * FROM oefeningen WHERE id = :id');
            $query1->execute(array(
                ':id' => $row['oefening']
            ));

            while ($row1 = $query1->fetch(PDO::FETCH_ASSOC)) {

                echo '<tr>
                <td>'. $row1['naam'] .'</td>
                <td>'. $row['reps'] .'</td>
                <td>'. $row['reps'] * $row1['calorieen'] .'</td>
                <td>'. $row['datum'] .'</td>
                </tr>';
            }
        }
        ?>
    </tbody>
    </table>
    </div>
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