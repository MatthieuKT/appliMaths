<?php
session_start();
// tableau d'URL
$sommaire = array('ex1.php', 'ex2.php', 'ex3.php');
// selectionne une URL au hasard entre 0 et la longueur maximum de l'array
$rand = rand(0,(count($sommaire)-1));
// inclus le fichier ciblé
include $sommaire[$rand];
?>
