<?php
if (isset($_POST['uitloggen'])) {
    if (isset($_SESSION['id'])) {
        unset($_SESSION['id']);
        session_destroy();
        header("Location: index.php");
    }
}       
?>
<nav id="navbar1" class="navbar navbar-expand-lg bg-primary rounded 1">
        <a class="navbar-brand" href="index.php">ExerciseMe</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="oefeningen.php">Oefeningen</a>
            </li>
            <?php
            if (!isset($_SESSION['id'])) {
                echo '
                <li class="nav-item">
                    <a class="nav-link" href="registreren.php">Registreren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Inloggen</a>
                </li>
            ';
            } else if (isset($_SESSION['id'])) {
                echo '                
                <li class="nav-item">
                    <a class="nav-link" href="logboek.php">Logboek</a>
                </li>
                <li class="nav-item">
                <form method="POST"><button name="uitloggen" id="uitloggen" class="nav-link" href="uitloggen.php">uitloggen</button></form>
                </li>';
            }
            ?>
        </ul>
    </nav>