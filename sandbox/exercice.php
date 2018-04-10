<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>phase 2</title>
  </head>
  <body>
    1+1 =
    <form id="form">
      <input type="text" name="reponse"/>
      <input type="submit" />
    </form>

    <?php
      if (isset($_POST["reponse"])) {
       echo "yooooo!";
      }
      if ($_POST) {
      
      }

     ?>

    <script type="text/javascript" src="ajax.js"></script>
    <script type="text/javascript" src="send.js"></script>
  </body>
</html>
