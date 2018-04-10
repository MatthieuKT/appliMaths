var formElt = document.getElementById("form");

formElt.addEventListener("submit", function(e) {
  // empeche l'envoi conventionnel du formulaire donc le rechargement de la page
  e.preventDefault();
  // Recuperation des champs de #form dans l'objet FormData()
  var data = new FormData(form);
  ajaxPost("http://localhost/applimaths/sandbox/correction.php", data, function(reponse){
    console.log("bien reçu bien reçu.");
  });
});
