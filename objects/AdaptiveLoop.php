<?php
class AdaptiveLoop
{
  private $limit;

  public function __construct($limit) {
    $this->limit = $limit;
  }

  public function setLoop() {
    $_SESSION["loop"];
  }

  public function activeLoops() {
    if ($_SESSION["loop"] < $this->limit) {
      $_SESSION["loop"] = $_SESSION["loop"]+1;
      echo '<a href="../randomRedirect.php">continuer</a>';
    }
    elseif ($_SESSION["loop"] >= $this->limit) {
        echo '<a href="../index.php">Terminé</a>';
        // ici on mettra les enregistrement des résultats dans la DB
        $_SESSION["loop"] = $_SESSION["loop"] * 0;
    }
  }

  public function getLoop() {
    return $_SESSION["loop"] . "/" . $this->limit;
  }
}

?>
