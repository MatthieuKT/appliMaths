<?php
include_once "objects/Stats.php";

  if (isset($_POST["moyenne"]) && isset($_POST["mediane"]) && isset($_POST["variance"]) && isset($_POST["result"])) {
    $moyenne = $_POST["moyenne"];
    $mediane = $_POST["mediane"];
    $variance = $_POST["variance"];


    // ne pas assigner sort() dans une variable sinon il retournera un booléen.
    sort($_POST["result"]);
    // Désormais $_POST["result"] est trié dans l'ordre croissant
    $data = $_POST["result"];
    // Initialisation d'un objet $stats
    $stats = new Stats($data);

    echo "moyenne: " . $stats->moyenne();
    echo "<br/> mediane: " . $stats->mediane();
    echo "<br/> variance: " . $stats->variance();


    if($stats->moyenne() == $moyenne) {
      echo "<br><br><br>moyenne Bingo! <br>";
    } else {
      echo "<br><br><br>moyenne echec <br>";
    }

    if ($stats->mediane() == $mediane) {
      echo "mediane Bingo! <br>";
    } else {
      echo "mediane echec <br>";
    }

    if($stats->variance() == $variance) {
      echo "Variance Bingo! <br>";
    } else {
      echo "variance echec <br>";
    }
  }

 ?>
