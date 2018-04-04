<?php
class ListNum
{
  private $list = array();
  private $listLength;

  public function __construct($min, $max) {
    echo $this->listLength;
    $this->listLength = rand($min, $max);

    for ($i=0; $i < $this->listLength ; $i++) {
      $num = rand(0,20);
      // Insère le nouveau nombre dans le tableau $list[];
      $this->list[] = $num;
    }
  }

  public function getList () {
    foreach ($this->list as $key => $value) {
      echo $value . "; ";
      // ajouter un return au lieu de l'echo?
    }
  }

  public function moyenne() {
    $somme = 0;
    // additionne tous les éléments du tableau
    foreach ($this->list as $key => $value) {
      $somme += $value;
    }
    $moyenne = round($somme / $this->listLength);
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
  echo $median;
  }

  public function variance() {
    // initialise la somme
    $somme = 0;
    $sommeEffectif = 0;
    // récupère la moyenne qui nous servira dans le calcul
    $moyenne = $this->moyenne($this->list);
    // Compte les occurences du tableau
    $effectives = array_count_values($this->list);
    foreach ($effectives as $effectif => $value) {
      $somme += ($effectif*pow(($value-$moyenne),2));

    }
    echo $somme;
  }
}

  ?>
