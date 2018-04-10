<?php
session_start();
 // include object files
include_once "../objects/Stats.php";
include_once "../objects/Rand.php"; ?>



<div id="soluce">
<?php
if (isset($_POST["reponse"])) {
  // Extraction des données contenues dans $_POST["reponse"]
  parse_str($_POST["reponse"]);
  // sort() est utile pour la médiane
  // ne pas assigner sort() dans une variable sinon il retourne un booléen.
  sort($_SESSION['dataSet']); // Désormais $_SESSION['dataSet'] est trié par ordre croissant
  $data = $_SESSION['dataSet'];
  // Initialisation d'un objet $stats
  $stats = new Stats($data);

  if (isset($moyenne) && $moyenne == $stats->moyenne()){
    echo "moyenne ok! <br>";
  }  else {
    echo "moyenne echec";
  }

  if (isset($mediane) && $mediane == $stats->mediane()){
    echo "mediane ok!";
  }  else {
    echo "mediane echec";
  }
}
 ?>
 <button id="next">suivant</button>
</div>
