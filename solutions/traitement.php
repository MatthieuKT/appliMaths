<?php
// $_SESSION["count"];
// echo $_SESSION["count"];

// set page headers
$page_title = "correction";
include_once "../exercices/layout_header.php";
include_once "../objects/AdaptiveLoop.php";
$loop = new AdaptiveLoop(2);
$loop->setLoop();
echo $loop->getLoop();
$loop->activeLoops();

// include object files
include_once "../objects/Stats.php";
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
    // apparition du bouton
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

// Redirige le client soit vers un nouvel exercice soit vers la fin
// if ($_SESSION["count"] < 0) {
//   $_SESSION["count"]+=1;
//   echo '<a href="../randomRedirect.php">continuer</a>';
// } elseif ($_SESSION["count"] == 3) {
//   $_SESSION["count"] = 0;
//   echo '<a href="../index.php">continuer</a>';
// }


include_once "../exercices/layout_footer.php"; ?>
