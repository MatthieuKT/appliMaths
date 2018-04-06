<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>
    <!-- our custom CSS -->
    <link rel="stylesheet" href="../libs/css/custom.css" />
  </head>
<body>

<div id="nav">
  <ul>
    <li><a href="exercice1.php">Exercice 1</a></li>
    <li><a href="exercice2.php">Exercice 2</a></li>
    <li><a href="exercice3.php">Exercice 3</a></li>
  </ul>
</div>
    <!-- container -->
    <div class="container">

        <?php
        // show page header
        echo "<div class='page-header'>
                <h1>{$page_title}</h1>
            </div>";
        ?>
