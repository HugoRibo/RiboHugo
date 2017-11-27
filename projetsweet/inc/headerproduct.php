
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sweet Pizza</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/pizza.css">
  <link rel="stylesheet" href="../css/pizzasell.css">
  <link rel="stylesheet" href="../css/patesandwich.css">
  <link rel="stylesheet" href="../css/saladetexmex.css">
  <link rel="stylesheet" href="../css/boissondessert.css">
  <link rel="stylesheet" href="../css/boidesbasket.css">
</head>

  <body>

    <header>
      <div id="panier">
        <a href="../panier.php">
          <?php if(empty($_SESSION['panier'])): ?>
            <img src="../img/panier.png" alt="">
          <?php elseif(!empty($_SESSION['panier'])):?>
            <img src="../img/panierplein.png" alt="">
          <?php endif; ?>
        </a>
      </div>
      <div id='logout'>
        <?php if(!empty($_SESSION['auth'])): ?>
          <a href="../logout.php" alt="deconnexion"><img src="../img/logout.png" alt=""></a>
        <?php endif; ?>
      </div>
      <div id="tel">
        <p>03 27 24 08 62 / 09 67 11 07 96</p>
        <div id="fb">
          <img src="../img/facebook.png" alt="fb">
          <img src="../img/twitter.png" alt="">
          <img src="../img/instagram.png" alt="">
          <img src="../img/snapchat.png" alt="">
        </div>
      </div>

      <div id='flexnav'>
        <div id="gridleft">
          <a href="../index.php"><img src="../img/logo.png" alt="Sweet Pizza Logo"></a>
        </div>
        <div id='gridcenter'>
          <ul id='hoverpizza'>
            <div id="panieresp">
              <a href="panier.php">
                <?php if(empty($_SESSION['panier'])): ?>
                  <img src="../img/panier.png" alt="">
                <?php elseif(!empty($_SESSION['panier'])):?>
                  <img src="../img/panierplein.png" alt="">
                <?php endif; ?>
              </a>
            </div>
            <div id='logoutresp'>
              <?php if(!empty($_SESSION['auth'])): ?>
                <a href="logout.php" alt="deconnexion"><img src="../img/logout.png" alt=""></a>
              <?php endif; ?>
            </div>
            <li class='num'><a href="tel:0327240862">03 27 24 08 62 </a></li><hr>
            <li class='num'><a href="tel:0967110796">09 67 11 07 96</a></li><hr>
            <li><a href="../pizza.php">Pizzas</a></li><hr>
            <li><a href="../patesandwich.php">Pates/Sandwichs</a></li><hr>
            <li><a href="../formule.php">Formules</a></li><hr>
            <li><a href="../saladetexmex.php">Salades/Tex-Mex</a></li><hr>
            <li><a href="../boissondessert.php">Desserts/Boissons</a></li><hr>
            <li><a href="../pastanight.php">Pasta Night</a></li><hr>
            <li><a href="../account.php">Mon compte</a></li><hr>
          </ul>
        </div>
        <div id='gridright'>
          <img id='menu' src="../img/menu.png" alt="">
          <img id='cancel' src="../img/cancel.png" alt="">
        </div>
      </div>
    </header>
