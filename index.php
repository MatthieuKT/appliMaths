<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stats desc'</title>
  </head>
  <body>

  <?php
  require_once "objects/listNum.php";

  // initialise une liste entre 10 et 20 nombres
  $newList = new ListNum(10, 20);
  ?>

  <form>
    <input type="text" name="moyenne" value="moyenne" id="moyenne" />
    <input type="submit" />
  </form>


  <script type="text/javascript" src="ajax.js"></script>
  <script type="text/javascript" src="validation.js"></script>
  </body>
</html>
