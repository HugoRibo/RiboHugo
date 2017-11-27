<?php
  session_start();
  $total = 0;

  if(!empty($_SESSION['auth']) && !empty($_SESSION['panier']) && isset($_POST['validatebasket']) && $_SESSION['total'] >= 10){
    require_once 'inc/db.php';
    $basket_content = serialize($_SESSION['panier']);
    $user_id = $_SESSION['auth']->user_id;
    $req = $PDO->prepare('INSERT INTO basket SET user_id = :user_id, basket_content = :basket_content, basket_total = :basket_total, datecommande = NOW()');
    $req->bindValue(':user_id', $user_id);
    $req->bindValue(':basket_content', $basket_content);
    $req->bindValue(':basket_total', $_SESSION['total']);
    $req->execute();
    $_SESSION['validatebasket'] = $_SESSION['panier'];
    unset($_SESSION['panier']);
    header('location: validatebasket.php');
  }elseif(!empty($_SESSION['total']) && $_SESSION['total'] < 10 && isset($_POST['validatebasket'])){
    $error = "Afin de commander, le total de votre panier doit être d'au moins 10 €";
  }
  elseif(empty($_SESSION['auth']) && !empty($_SESSION['panier']) && isset($_POST['validatebasket'])){
    $_SESSION['validatebasket'] = $_SESSION['panier'];
    header('location: validatebasket.php');
    unset($_SESSION['panier']);
  }

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
      <?php if(!empty($error)): ?>
        <div class="alert alert-danger">
          <p><?= $error; ?></p>
        </div>
      <?php endif; ?>
    <table>
      <thead>
        <tr>
          <th>Nom</th>
          <th>Type</th>
          <th>Quantité</th>
          <th id="headprice">Prix</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody id="listimg">
        <?php if(!empty($_SESSION['panier'])): ?>
                <?php foreach(array_keys($_SESSION['panier']) as $k => $v):?>
                  <tr class="<?= $k; ?>">
                    <td><?= $_SESSION['panier'][$k]['Nom']; ?></td>
                    <td><?= $_SESSION['panier'][$k]['Type']; ?></td>
                    <td class="modified<?= $k; ?>"><?= $_SESSION['panier'][$k]['Quantité']; ?></td>
                    <td class="modify modify<?= $k; ?>"><input class="modifvalue<?= $k; ?>" type="number"></td>
                    <td id="listprice"><?= $_SESSION['panier'][$k]['Prix']; ?> €</td>
                    <td class="modify modify<?= $k; ?>"><button class="valimod modifbutton" type="button" name='validmodif' id='<?= $k; ?>'>Valider</button></td>
                    <td class="Modified_button<?= $k; ?>"><button id="mod" type="button" name="<?= $k; ?>" class="modif" name="modifbutton">Modifier</button></td>
                    <td><a href="panier.php"><button id="del" type="button" name="<?= $k; ?>" class='delete'>Retirer</button></a></td>
                  </tr>
                  <?php $total = $total + ($_SESSION['panier'][$k]['Prix'] * $_SESSION['panier'][$k]['Quantité']); ?>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
          <?php $_SESSION['total'] = $total;?>
          <div id="noinspi">
          <p id=listotal>Total : <?= $total; ?> €</p>
          <form class="" action="" method="post">
            <input class="valist" type="submit" name="validatebasket" value="Valider le panier">
          </form>
        </div>
      </div>

      <div class="rayon">
        <img src="img/rayon.png" alt="">
      </div>

        </main>

<?php include 'inc/footer.php'; ?>
