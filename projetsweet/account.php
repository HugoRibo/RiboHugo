
<?php
  require_once 'inc/functions.php';
  logged_only();
  require_once 'inc/db.php';
  $user_id = $_SESSION['auth']->user_id;
  $req = $PDO->prepare('SELECT * FROM basket WHERE user_id = :user_id');
  $req->bindValue(':user_id', $user_id);
  $req->execute();
  if($_SESSION['auth']->admin == 'true'){
    header('location: administration.php');
  }
  if(!empty($_POST)){
    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
      $_SESSION['flash']['danger'] = "Les mots de passe ne correspondent pas";
    } else{
      $user_id = $_SESSION['auth']->user_id;
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $PDO->prepare('UPDATE users SET password = ?')->execute([$password]);
      $_SESSION['flash']['success'] = "Votre mot de passe a bien été mis à jour";
    }
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
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

<?php include 'inc/header.php'; ?>

  <main>

    <p id="welcome"><?= $_SESSION['auth']->pseudo; ?></p>
  <div id="accflex">
    <div class="modifyfy">
      <form class="modif" method="post" action="">
        <h3 class="titre">Changement de mot de passe</h3>
        <input type="password" name="password" value="" placeholder="nouveau mot de passe">
        <input type="password" name="password_confirm" value="" placeholder="confirmer votre nouveau mot de passe">
        <input id="modmod" type="submit" name="" value="Modifier">
      </form>
    </div>

    <div class="recapbasket">
      <div id="bask">
        <h2 class="historic">Historique des commandes : </h2>
        <table>
          <thead>
            <tr>
              <th>Nom</th>
              <th>Type</th>
              <th>Quantité</th>
              <th>Prix</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody id="listimg">
      <?php  foreach ($req->fetchAll() as $k => $data): ?>

        <?php $baskett = array(); ?>
        <?php $baskett = unserialize($data->basket_content); ?>
        <?php if(!empty($baskett)): ?>

          <?php foreach($baskett as $w => $x): ?>
            <tr>
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

  <div class="pointfid">
    <p>Vos points de fidélité sont actuellement de : <?= $_SESSION['auth']->point_fidel;?></p>
  </div>

  </main>

<?php include 'inc/footer.php'; ?>
