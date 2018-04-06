<?php
  // set page headers
  $page_title = "Exercice 3";
  include_once "layout_header.php";

  // include object file
  require_once "../objects/DataSet.php";
  require_once "../objects/Stats.php"; // on retirera apres

  // prepare Dataset and Stats objects
  // init a list of random numbers between 10 and 20
  $dataSet = new DataSet(20, 50);
  $stats = new Stats($dataSet->getData());

  // display the list of random numbers
  //$dataSet->displayData();

  // parrallèlement on récupère les data pour les transmettre via formulaire
  $data = $dataSet->getData();
  $count = array_count_values($data);
  $tri = array_unique($data);
  sort($tri);
  echo "<br/> Solution mediane: " . $stats->mediane();
?>

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

<form id="form" method="post" action="../solutions/traitement.php">
  <?php
    // récupération data générées actuellement pour les transmettre via formulaire
    $actuelData = $dataSet->getData();
    // we will got $_POST['result'] as array
    foreach ($actuelData as $value) {
      echo '<input type="hidden" name="result[]" value="'. $value. '">';
    }
  ?>
  <label for="mediane">Mediane: </label>
  <input type="text" name="mediane" id="mediane" />
  <input type="submit" />
</form>

<?php
// footer
include_once "layout_footer.php";
?>
