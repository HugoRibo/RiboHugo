<?php
  session_start();
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
  <link rel="stylesheet" href="css/patesandwich.css">
</head>
<body>
<?php include 'inc/header.php'; ?>

  <h1>Nos pâtes et sandwich</h1>

  <div id="flexpiz">

    <div id='1' class="gridpiz ps pate1">
      <div class='namepizza'>Box de Pâtes</div>
      <div class="more">
        <p>Pâtes penne Sauce au choix:</p>
        <p>bolognaise, carbonara, saumon.</p>
        <p>Prix : 5 €</p>
      </div>
      <div class='add'><img src="img/add.png" alt=""></div>
    </div>

    <div id='2' class="gridpiz ps pate2">
      <div class='namepizza'>Panini</div>
      <div class="more">
        <p>Panini au choix:</p>
        <p>Base tomate (thon, viande hachée)</p>
        <p>Base crème (jambon, 4 fromages, poulet, saumon)</p>
        <p>Prix : 4.50€</p>
      </div>
      <div class='add'><img src="img/add.png" alt=""></div>
    </div>

    <div id='3' class="gridpiz ps pate3">
      <div class='namepizza'>Croque Mr</div>
      <div class="more">
        <p>Pain de mie, crème fraîche, jambon, émmental</p>
        <p>Prix : 2.50 €</p>
      </div>
      <div class='add'><img src="img/add.png" alt=""></div>
    </div>


  </div>

<?php include 'inc/footer.php'; ?>
