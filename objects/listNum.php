<?php
class ListNum
{
  private $list = array();
  private $listLength;

  public function __construct($min, $max) {
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
    echo $moyenne;
  }
}

$newList = new ListNum(10, 20);
$newList->moyenne();

?>
