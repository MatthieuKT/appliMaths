<?php
// include object file
require_once "../objects/DataSet.php";
require_once "../objects/Stats.php";

// prepare Dataset and Stats objects
// init a list of random numbers between 5 and 8
$dataSet = new DataSet(5, 8);
$stats = new Stats($dataSet->getData());
$_SESSION['dataSet'] = $dataSet->getData();
?>


<div id="test">
<?php
$dataSet->displayData();

// display the exercice resolution for debug
echo "<br/><br/> Solution moyenne: " . $stats->moyenne();
echo "<br/>Solution mediane: " . $stats->mediane() . "<br/><br/>";
?>

<form id="reponse">
  <label for="moyenne">Moyenne:</label>
  <input type="text" name="moyenne"/>
  <label for="mediane">Médiane:</label>
  <input type="text" name="mediane"/>
  <input type="submit" />
</form>
</div>
