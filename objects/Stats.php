<?php
class Stats
{
  public function moyenne($data) {
    $somme = 0;
    // additionne tous les éléments du tableau
    foreach ($data as $key => $value) {
      $somme += $value;
    }
    $moyenne = round($somme / 9);
    return $moyenne;
  }

  public function mediane() {
    //total numbers in array
    $count = count($this->list);
    // find the middle value, or the lowest middle value
    $middleVal = floor(($count-1)/2);
    if ($count % 2) { // odd number, middle is the median
      $median = $this->list[$middleVal];
    } else { // even number , calculate avg of 2 medians
      $low = $this->list[$middleVal];
      $high = $this->list[$middleVal+1];
    $median = (($low+$high)/2);
    }
    return $median;
  }

  public function variance() {
    // initialise la somme des resultats
    $sommeNumerateurs = 0;
    $sommeOccurence = 0;
    // récupère la moyenne qui nous servira dans le calcul
    $moyenne = $this->moyenne($this->list);
    // Compte les occurences du tableau
    $occurences = array_count_values($this->list);
    foreach ($occurences as $value => $occurence) {
      // calcul du numerateur de la formule
      $sommeNumerateurs += ($occurence*pow($value-$moyenne,2));
      // calcul du denominateur de la formule
      $sommeOccurence += $occurence;
    }
    return $sommeNumerateurs/$sommeOccurence;
  }
}
 ?>
