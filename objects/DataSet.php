<?php
class DataSet
{
  private $dataSet = array();
  private $dataSetLength;

  public function __construct($min, $max) {
    echo $this->dataSetLength;
    $this->dataSetLength = rand($min, $max);
    for ($i=0; $i < $this->dataSetLength ; $i++) {
      $num = rand(0,20);
      // Insère le nouveau nombre dans le tableau $dataSet[];
      $this->dataSet[] = $num;
    }
  }

  public function displayData() {
    foreach ($this->dataSet as $key => $value) {
      echo $value . "; ";
    }
  }

  public function getData() {
    return $this->dataSet;
  }
}

?>
