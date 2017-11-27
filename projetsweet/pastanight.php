<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Sweet Pizza</title>
  <link rel="stylesheet" media="screen" href="css/particles.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/pastanight.css">

</head>
  <body>
<!-- particles.js container -->
  <div id="particles-js"></div>

<?php include 'inc/header.php'; ?>

    <div id="flexbox">

    <div id="left">
      <div id="blur">

    <div id="head">
      <h2>Pasta Night</h2>
      <h3>06 16 14 78 10</h3>
      <p>Sweet Pizza vous propose un service de nuit du Dimanche au Jeudi de 23h00 à 2h00 et du Vendredi au Samedi de 23h00 à 6h00.</p>
    </div>

    <div id="cart">
      <div id="lt">
      <p>MENU:</p>
      <ul>
        <li>Box de pâte taille XL (bolognaise, saumon à la sauce carbonara)</li>
        <li>Diverses boissons au choix (33cl, 1,5l et 2l)</li>
      </ul>
    </div>
<div id="rt">
      <p>DESSERTS:</p>
      <ul>
        <li>Tarte (pommes ou daim)</li>
        <li>Brownie</li>
        <li>Barre chocolatée</li>
        <li>Chips petit format</li>
      </ul>
    </div>
    </div>



    <div id="foot">
      <p>Lieu de livraison : Marly, Saint-Saulve, Anzin, Denain.</p>
      <p>Délai de livraison : environ 40 minutes.</p>
    </div>
</div>
    </div><!--left-->

    <div id="right">

    </div><!--right-->



    </div><!--flexbox-->

    <div class="rayon">
      <img src="img/rayon2.png" alt="">
    </div>


  <!-- scripts -->
  <script src="js/particles.js"></script>
  <script src="js/app.js"></script>

  <!-- stats.js -->
  <script src="js/lib/stats.js"></script>
  <script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    update = function() {
      stats.begin();
      stats.end();
      if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
        count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
      }
      requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
  </script>

<?php include 'inc/footer.php'; ?>
