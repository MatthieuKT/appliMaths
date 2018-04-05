<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stats desc'</title>
    <link rel="stylesheet" type="text/css" href="libs/custom.css"
  </head>
  <body>

  <?php
  require_once "objects/DataSet.php";
  // on retirera apres
  require_once "objects/Stats.php";

  // initialise une liste entre 10 et 20 nombres
  $dataSet = new DataSet(10, 20);
  $stats = new Stats();
?>

<div class="container">
  <?php
  // affiche la liste de nombres aléatoires
   echo $dataSet->displayData();

   // affiche la solution pour débugage
   echo "<br/> Solution moyenne: " . $stats->moyenne($dataSet->getData());
  ?>

  <form id="form" method="post" action="traitement.php">
    <?php
      // parrallèlement on récupère les data pour les transmettre
      $actuelData = $dataSet->getData();
      // we will got $_POST['result'] as array
      foreach ($actuelData as $value) {
        echo '<input type="hidden" name="result[]" value="'. $value. '">';
      }
    ?>
    <label for="moyenne">Moyenne: </label>
    <input type="text" name="moyenne" id="moyenne" />
    <input type="submit" />
  </form>

</div>

  <!-- <script type="text/javascript" src="ajax.js"></script>
  <script type="text/javascript" src="validation.js"></script> -->
  </body>
</html>
