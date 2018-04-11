<?php
class AdaptiveLoop
{
  private $limit;

  public function __construct($limit) {
    $this->limit = $limit ;
  }

  public function setLoop() {
    $_SESSION["count"] = $_SESSION["count"]+1;
  }

  public function getLoop() {
    return  $_SESSION["count"] . "/" . $this->limit;
  }

  public function activeLoops() {
    if ($_SESSION["count"] < $this->limit) {
      // $_SESSION["count"] = $_SESSION["count"]+1;
      echo '<form class="next">';
      // cet input permet l'iteration de $_SESSION["count"] à chaque réponse envoyée
      echo '<input type="hidden" name="iterarion" value="iteration" id="iteration"/>';
      //valide la réponse de l'utilisateur
      echo '<input type="submit" value="suivant" id="suivant">';
      echo '</form>';
    }
    elseif ($_SESSION["count"] == $this->limit) {
      // Ajouter un événement pour éviter le rechargement de page
      echo '<a href="index.php">Terminé</a>';
      // ici on mettra les enregistrement des résultats dans la DB

      // réinitialise le compteur à 0
      $_SESSION["count"] = $_SESSION["count"] * 0;
    }
    else {
      // réinitialise le compteur à 0
      $_SESSION["count"] = $_SESSION["count"] * 0;
    }
  }


}

?>
