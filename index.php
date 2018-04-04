<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stats desc'</title>
    <link rel="stylesheet" type="text/css" href="libs/custom.css"
  </head>
  <body>

  <?php
  require_once "objects/listNum.php";

  // initialise une liste entre 10 et 20 nombres
  $newList = new ListNum(10, 20);
  $newList->variance();
  ?>

<div class="container">
  <?php $newList->getList() // récupère la liste de nombres aléatoires ?>

  <form id="form">
    <label for="moyenne">Moyenne: </label>
    <input type="text" name="moyenne" id="moyenne" />
    <input type="submit" />
  </form>

</div>



  <script type="text/javascript" src="ajax.js"></script>
  <script type="text/javascript" src="validation.js"></script>
  </body>
</html>
