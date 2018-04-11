$("document").ready(function() {

  // evenement appliquable une fois seulement que #next est créé
  $('#container').on('submit', '.next', function(e){
    e.preventDefault();
    var iterationVal = $('#iteration').val();
    $('#container').load('exercice.php',
    {
      iteration:iterationVal
    }
    );
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
