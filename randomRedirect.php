<?php
session_start();
include_once "objects/Rand.php";
$redirect = new Rand();
$redirect->getRand();
 ?>
