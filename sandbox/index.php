<?php
//session_start();
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>phase 1</title>
    <link rel="stylesheet" type="text/css" href="libs/css/custom.css">
  </head>
  <body>


    <div id="container">
      <form class="next">
        <!--autofocus car il suffit d'appuyer directement
        sur la touche entrée pour démarrer-->
        <input type="submit" value="commencer" autofocus>
      </form>
    </div>



    <script
    			  src="https://code.jquery.com/jquery-2.2.4.js"
    			  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    			  crossorigin="anonymous"></script>

		<script type="text/javascript">

    $("document").ready(function() {

      // evenement appliquable une fois seulement que #next est créé
      $('#container').on('submit', '.next', function(e){
        e.preventDefault();
        $('#container').load('exercice.php');
      });

      // evenement appliquable une fois seulement que #correction est créé
      $('#container').on('submit', '#reponse', function(e){
        e.preventDefault();
        // Recupère tous les champs du formulaire #correction
        var formContent = $( this ).serialize();
        $('#container').load('correction.php',
        {
          // reponse entrée dans l'input
            reponse:formContent
          // penser à récupérer les input type hidden aussi (remplacer par une session?)
        }
      );
    });
  });

    </script>
  </body>
</html>
