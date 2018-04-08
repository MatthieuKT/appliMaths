<?php
include_once "../objects/Stats.php";
// l'objet qui génère des liens aléatoires
include_once "../objects/Rand.php";


if (isset($_POST["moyenne"]) && isset($_POST["result"])) {
  $moyenne = $_POST["moyenne"];
  // ne pas assigner sort() dans une variable sinon il retournera un booléen.
  sort($_POST["result"]);
  // Désormais $_POST["result"] est trié dans l'ordre croissant
  $data = $_POST["result"];
  // Initialisation d'un objet $stats
  $stats = new Stats($data);

  if($stats->moyenne() == $moyenne) {
    echo "<br><br><br>moyenne Bingo! <br>";
  } else {
    echo "<br><br><br>moyenne echec <br>";
  }
}

if (isset($_POST["mediane"]) && isset($_POST["result"])) {
  $mediane = $_POST["mediane"];
  // ne pas assigner sort() dans une variable sinon il retournera un booléen.
  sort($_POST["result"]);
  // Désormais $_POST["result"] est trié dans l'ordre croissant
  $data = $_POST["result"];
  // Initialisation d'un objet $stats
  $stats = new Stats($data);

  if ($stats->mediane() == $mediane) {
    echo "mediane Bingo! <br>";
  } else {
    echo "mediane echec <br>";
  }
}

if (isset($_POST["variance"]) && isset($_POST["result"])) {
  $variance = $_POST["variance"];
  // ne pas assigner sort() dans une variable sinon il retournera un booléen.
  sort($_POST["result"]);
  // Désormais $_POST["result"] est trié dans l'ordre croissant
  $data = $_POST["result"];
  // Initialisation d'un objet $stats
  $stats = new Stats($data);

  if($stats->variance() == $variance) {
    echo "Variance Bingo! <br>";
  } else {
    echo "variance echec <br>";
  }
}

?>
