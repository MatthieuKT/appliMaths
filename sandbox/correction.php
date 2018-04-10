<?php
session_start();
 // include object files
include_once "../objects/Stats.php";
include_once "../objects/Rand.php";

// si envoi du formulaire
if (isset($_POST["reponse"])) {
  // Extraction des données contenues dans $_POST["reponse"]
  parse_str($_POST["reponse"]);
  // sort() est utile pour la médiane
  // ne pas assigner sort() dans une variable sinon il retourne un booléen.
  sort($_SESSION['dataSet']); // Désormais $_SESSION['dataSet'] est trié par ordre croissant
  $data = $_SESSION['dataSet'];
  // Initialisation d'un objet $stats
  $stats = new Stats($data);
  // Si moyenne existe
  if (isset($moyenne)){
    if ($moyenne == $stats->moyenne()) {
      echo "moyenne ok! <br>";
    }  else {
      echo "moyenne echec <br>";
    }
  }
  // Si mediane existe
  if (isset($mediane)){
    if ($mediane == $stats->mediane()) {
      echo "mediane ok! <br>";
    }  else {
      echo "mediane echec <br>";
    }
  }
  // Si variance existe
  if (isset($variance)) {
    if ($variance == $stats->variance()) {
      echo "variance ok!";
    }  else {
      echo "variance echec";
    }
  }
}
 ?>
 <form class="next">
   <input type="submit" value="suivant" id="suivant">
 </form>

<!-- simple script permettant d'avoir directement le focus -->
 <script type="text/javascript">
   document.getElementById('suivant').focus();
 </script>
