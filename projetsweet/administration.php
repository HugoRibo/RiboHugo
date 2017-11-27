<?php
  require_once 'inc/db.php';
  session_start();
  require_once 'inc/functions.php';
  admin_only();

  $req = $PDO->prepare('SELECT * FROM basket');
  $req->execute();

  if(!empty($_POST['search'])){
    $req2 = $PDO->prepare('SELECT * FROM users WHERE pseudo = :pseudo');
    $req2->bindValue(':pseudo', $_POST['search']);
    $req2->execute();
    $pts = $req2->fetch();
    $_SESSION['search'] = $pts;
  }

  if(!empty($_POST['newpts'])){
    $_SESSION['search']->point_fidel = $_SESSION['search']->point_fidel + $_POST['newpts'];
    $req3 = $PDO->prepare('UPDATE users SET point_fidel = :point_fidel WHERE user_id =:user_id');
    $req3->bindValue(':user_id', $_SESSION['search']->user_id);
    $req3->bindValue(':point_fidel', $_SESSION['search']->point_fidel);
    $req3->execute();
  }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sweet Pizza</title>
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

<?php include 'inc/header.php'; ?>

  <main>

  <div id="accflex">

    <div class="recapbasket">
      <div id="bask">
        <h2 class="historic">Historique des commandes : </h2>
        <table>
          <thead>
            <tr>
              <th>Client</th>
              <th>Nom</th>
              <th>Type</th>
              <th>Quantité</th>
              <th>Prix</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody id="listimg">
      <?php  foreach ($req->fetchAll() as $k => $data): ?>
<tr>

        <?php $baskett = array(); ?>
        <?php $baskett = unserialize($data->basket_content); ?>
        <?php if(!empty($baskett)): ?>

          <?php foreach($baskett as $w => $x): ?>
          <?php
            $req = $PDO->prepare('SELECT * FROM users WHERE user_id = :user_id');
            $req->bindValue(':user_id', $data->user_id);
            $req->execute();
            $user = $req->fetch();
          ?>
            <td><?= $user->pseudo ?></td>
             <td><?= $baskett[$w]['Nom']; ?></td>
             <td><?= $baskett[$w]['Type']; ?></td>
             <td><?= $baskett[$w]['Quantité']; ?></td>
              <td id="listprice"><?= $baskett[$w]['Prix']; ?></td>
             <td><?= $data->datecommande; ?></td>
           </tr>

         <?php endforeach; ?>
       <?php endif; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
      </div>
    </div>


      <div class="ajoutfidel">
        <p>Attribuer des points de fidélité à un utilisateur : </p>
        <form class="fidelajout" action="" method="post">
          <input type="text" name="search" value="" placeholder="Pseudo d'utilisateur">
          <input type="submit" name="" value="Rechercher">
        </form>
        <?php if(!empty($_SESSION['search'])): ?>
        <div class="ajoutrue">
          <form class="" action="" method="post">
          <table class="ajoutajout">
            <thead>
              <tr>
                <th>User id</th>
                <th>Pseudo</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Points de fidélité</th>
                <th>Attribuer des points</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <td><?= $_SESSION['search']->user_id; ?></td>
              <td><?= $_SESSION['search']->pseudo; ?></td>
              <td><?= $_SESSION['search']->nom_user; ?></td>
              <td><?= $_SESSION['search']->prenom_user; ?></td>
              <td><?= $_SESSION['search']->point_fidel; ?></td>
              <td><input type="number" name="newpts" placeholder="0"></td>
              <td><input type="submit" name="" value="Valider"></td>
            </tbody>
          </table>
          </form>
        </div>
        <?php endif; ?>
      </div>

    </div>
  </main>

<?php include 'inc/footer.php'; ?>
