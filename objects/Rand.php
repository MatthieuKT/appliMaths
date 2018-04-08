<?php
class Rand
{
  // Afterwards we stock this in a SQL database
  private $_exercices = array("exercice1.php", "exercice2.php", "exercice3.php");
  private $_path = "exercices/";

  // Génère un random entre 1 et le nombre total d'exercices
  function getRand() {
    // retourne le nombre total d'exercices
    $exercicesLength = count($this->_exercices);
    // le -1 est utile ici car l'index d'un tableau commence toujours à 0
    $rand = (rand(1, $exercicesLength)-1);
    // retourne la concaténation du path + file
    $url = $this->_path . $this->_exercices[$rand];

    //a condition que l'on aie pas dépassé le loop
    // redirige vers la page générée aléatoirement
    header('Location:' . $url);
  }
}
/*
Next step :
if reponse === solution {
  affiche bonne réponse
  getRand()
} else {
  affiche mauvaise réponse
}

Then : AJAX calls!

Question = on corrige à la volée ou on attends le barême final ?

*/

 ?>
