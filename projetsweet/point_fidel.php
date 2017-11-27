<?php
  require_once 'inc/db.php';

  $req = $PDO->prepare('SELECT * FROM basket');
  $req->execute();
    if(!empty($_POST['search'])){
      $req = $PDO->prepare('SELECT * FROM users WHERE pseudo = :pseudo');
      $req->bindValue(':pseudo', $_POST['search']);
      $req->execute();
      $pts = $req->fetch();
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
      </div>

      <div class="">
        <p>Attribuer des points de fidélité pour un utilisateur : </p>
        <form class="" action="point_fidel.php" method="post">
          <input type="text" name="search" value="" placeholder="Pseudo d'utilisateur">
          <input type="submit" name="" value="Rechercher">
        </form>
        <?php if(isset($pts)): ?>
        <div class="">
          <table>
            <thead>
              <tr>
                <th>User id</th>
                <th>Pseudo</th>
                <th>Points de fidélité</th>
              </tr>
            </thead>
            <tbody>
              <td><?= $pts->user_id; ?></td>
              <td><?= $pts->pseudo; ?></td>
              <td><?= $pts->point_fidel; ?></td>
            </tbody>
          </table>
        </div>
        <?php endif; ?>
      </div>
  </main>

<?php include 'inc/footer.php'; ?>
