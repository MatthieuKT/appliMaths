<?php
class Stats
{
  // initialise le tableau de données
  private $dataSet = array();
  private $dataSetLength;
  // le constructeur prends en paramètres un tableau de données
  public function __construct(array $dataset) {
    $this->dataSet = $dataset;
    $this->dataSetLength = count($dataset);
  }

  // Calcul de la moyenne
  public function moyenne() {
    $somme = 0;
    // additionne tous les éléments du tableau
    foreach ($this->dataSet as $value) {
      $somme += $value;
    }
    $moyenne = round($somme / $this->dataSetLength);
    return $moyenne;
  }

  // calcul de la mediane
  public function mediane() {
    sort($this->dataSet);
    //total numbers in array
    $count = count($this->dataSet);
    // find the middle value, or the lowest middle value
    $middleVal = floor(($count-1)/2);
    if ($count % 2) { // odd number, middle is the median
      $median = $this->dataSet[$middleVal];
    } else { // even number , calculate avg of 2 medians
      $low = $this->dataSet[$middleVal];
      $high = $this->dataSet[$middleVal+1];
    $median = (($low+$high)/2);
    }
    return $median;
  }

  // calcul de la variance
  public function variance() {
    // initialise la somme des resultats
    $sommeNumerateurs = 0;
    $sommeOccurence = 0;
    // récupère la moyenne qui nous servira dans le calcul
    $moyenne = $this->moyenne();
    // Compte les occurences du tableau
    $occurences = array_count_values($this->dataSet);
    foreach ($occurences as $value => $occurence) {
      // calcul du numerateur de la formule
      $sommeNumerateurs += ($occurence*pow($value-$moyenne,2));
      // calcul du denominateur de la formule
      $sommeOccurence += $occurence;
    }
    // retourne le résultat arrondi deux chiffres après la virgule
    return round($sommeNumerateurs/$sommeOccurence, 2);
  }
}
 ?>
