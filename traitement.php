<?php
include_once "objects/Stats.php";

$stats = new Stats();

  if (isset($_POST["moyenne"]) && isset($_POST["result"])) {
    $moyenne = $_POST["moyenne"];
    $result = $_POST["result"];

    if($stats->moyenne($result) == $moyenne) {
      echo "Bingo!";
    } else {
      echo "Omae wa mo shinderu!!!";
    }
  } else {
    echo "nanni!??";
  }

 ?>
