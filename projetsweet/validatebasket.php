<?php
  session_start();
  $total = 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sweet Pizza</title>
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/panier.css">
</head>
<body>

<?php include 'inc/header.php'; ?>

<main id='paniermain'>

  <div id="bask">

  <table>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Type</th>
        <th>Quantité</th>
        <th>Prix</th>
      </tr>
    </thead>
    <tbody id="listimg">
      <?php if(!empty($_SESSION['validatebasket'])): ?>
        <?php foreach(array_keys($_SESSION['validatebasket']) as $k => $v):?>
          <tr class="<?= $k; ?>">
            <td><?= $_SESSION['validatebasket'][$k]['Nom']; ?></td>
            <td><?= $_SESSION['validatebasket'][$k]['Type']; ?></td>
            <td class="modified<?= $k; ?>"><?= $_SESSION['validatebasket'][$k]['Quantité']; ?></td>
            <td id="listprice"><?= $_SESSION['validatebasket'][$k]['Prix']; ?> €</td>
          </tr>
            <?php $total = $total + ($_SESSION['validatebasket'][$k]['Prix'] * $_SESSION['validatebasket'][$k]['Quantité']); ?>
        <?php endforeach; ?>
      <?php endif; ?>
      <div class="recappanier">
        Le total est de : <span id="spanto"><?= $total; ?> €</span> <br>
        Pour commander veuillez appeler un des deux numéro suivants <br>
        03 27 24 08 62 ou 09 67 11 07 96
      </div>
    </tbody>
  </table>
</div>

<div class="rayon">
  <img src="img/rayon.png" alt="">
</div>
</main>

<?php include 'inc/footer.php'; ?>
