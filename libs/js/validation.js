var form = document.getElementById("form");

// Gestion de la soumission du formulaire
form.addEventListener("submit", function (e) {
  // Empêche la validation du formulaire
  e.preventDefault();
  // Récupération des champs du formulaire dans l'objet FormData
  var data = new FormData(form);
  // Envoi des données du formulaire au serveur
  ajaxPost("http://localhost/appliMaths/traitement.php", data, function() {});
});
