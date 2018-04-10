<?php
// include object file
require_once "../objects/DataSet.php";
require_once "../objects/Stats.php";

// prepare Dataset and Stats objects
// init a list of random numbers between 20 and 50
$dataSet = new DataSet(20, 50);
$stats = new Stats($dataSet->getData());
// passe le dataset en session pour être utilisée dans la correction
$_SESSION['dataSet'] = $dataSet->getData();

// Préparation des éléments du tableau
$data = $dataSet->getData();
// compte les effectifs du tableau de dataSet
$count = array_count_values($data);
// Dédoublonne le tableau pour pouvoir afficher des valeurs uniques
$tri = array_unique($data);
// trie les valeurs pour les besoins de l'affichage
sort($tri);

// display the exercice resolution for debug
echo "<br/> Solution mediane: " . $stats->mediane();
?>

<!--Affiche le tableau d'effectifs-->
<table>
  <tr>
    <th>valeurs:</th>
      <?php
        foreach ($tri as $key => $value) {
          echo '<td>'. $value .'</td>';
        }
      ?>
  </tr>
  <tr>
    <th>effectifs:</th>
      <?php
      foreach ($count as $key => $value) {
        echo '<td>'. $value .'</td>';
      }?>
  </tr>
</table>

<form id="reponse">
  <label for="mediane">Médiane:</label>
  <input type="text" name="mediane"/>
  <input type="submit" />
</form>
