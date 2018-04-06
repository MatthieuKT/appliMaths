<?php
  // set page headers
  $page_title = "Exercice 1";
  include_once "layout_header.php";

  // include object file
  require_once "../objects/DataSet.php";
  require_once "../objects/Stats.php"; // on retirera apres

  // prepare Dataset and Stats objects
  // init a list of random numbers between 10 and 20
  $dataSet = new DataSet(5, 8);
  $stats = new Stats($dataSet->getData());

  // display the list of random numbers
   $dataSet->displayData();

   // display the exercice resolution for debug
   echo "<br/><br/> Solution moyenne: " . $stats->moyenne();
   echo "<br/> Solution mediane: " . $stats->mediane();
  ?>

  <form id="form" method="post" action="../solutions/traitement.php">
    <?php
      // parrallèlement on récupère les data pour les transmettre via formulaire
      $actuelData = $dataSet->getData();
      // we will got $_POST['result'] as array
      foreach ($actuelData as $value) {
        echo '<input type="hidden" name="result[]" value="'. $value. '">';
      }
    ?>
    <label for="moyenne">Moyenne: </label>
    <input type="text" name="moyenne" id="moyenne" />
    <label for="mediane">Mediane: </label>
    <input type="text" name="mediane" id="mediane" />
    <input type="submit" />
  </form>

<?php
// footer
include_once "layout_footer.php";
?>
