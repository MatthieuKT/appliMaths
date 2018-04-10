<?php
// include object file
require_once "../objects/DataSet.php";
require_once "../objects/Stats.php";

// prepare Dataset and Stats objects
// init a list of random numbers between 10 and 20
$dataSet = new DataSet(10, 20);
$stats = new Stats($dataSet->getData());
$_SESSION['dataSet'] = $dataSet->getData();

// Affichage du dataSet pour les besoins de l'énoncé
$dataSet->displayData();

// display the exercice resolution for debug
echo "<br/><br/> Solution moyenne: " . $stats->moyenne();
echo "<br/>Solution mediane: " . $stats->mediane();
echo "<br/> variance: " . $stats->variance();
?>

<form id="reponse">
  <label for="moyenne">Moyenne:</label>
  <input type="text" name="moyenne"/>
  <label for="mediane">Médiane:</label>
  <input type="text" name="mediane"/>
  <label for="variance">Variance: </label>
  <input type="text" name="variance" id="variance" />
  <input type="submit" />
</form>
