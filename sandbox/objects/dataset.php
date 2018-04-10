<?php
// L'objet $dataSet crée entre $min et $max nombres aléatoires
class DataSet
{
  // les nombres aléatoires seront stockés dans un tableau
  private $dataSet = array();
  private $dataSetLength;

  public function __construct($min, $max) {
    // assigne une longueur aléatoire à $dataSet
    $this->dataSetLength = rand($min, $max);
    for ($i=0; $i < $this->dataSetLength ; $i++) {
      // Génère un nombre aléatoire
      $num = rand(0,20);
      // Insère le nouveau nombre dans le tableau $dataSet[];
      $this->dataSet[] = $num;
    }
  }

  // affiche les valeurs du tableau sous forme de chaine de carractères
  public function displayData() {
    foreach ($this->dataSet as $key => $value) {
      echo $value . "; ";
    }
  }

  // retourne les data qui seront traitées par l'objet Stats()
  public function getData() {
    return $this->dataSet;
  }
}
?>
