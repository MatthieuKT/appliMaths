<?php
session_start();

// include object file
include_once "objects/AdaptiveLoop.php";

// creation d'un objet $loop avec comme limite de répétitions la valeur 5
$loop = new AdaptiveLoop(5);
// initialise $_SESSION["count"] à 1
$loop->setLoop();

?>
<span> exercice:
<?php
// a chaque clic d'un input "#next"
if (isset($_POST["iteration"])) {
  // itère la session chargée de compter le nombre de répétitions d'exercices
  echo $loop->getLoop();
}
?>
</span>

<?php

// tableau d'URL
$sommaire = array('ex1.php', 'ex2.php', 'ex3.php');
// selectionne une URL au hasard entre 0 et la longueur maximum de l'array
$rand = rand(0,(count($sommaire)-1));

// inclus le fichier ciblé
include "exercices/" . $sommaire[$rand];
?>
