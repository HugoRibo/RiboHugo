<?php
if(!empty($_POST)&& !empty($_POST['username']) && !empty($_POST['password'])){
  require_once 'inc/db.php';
  $req = $PDO->prepare('SELECT * FROM users WHERE (pseudo = :username OR email = :username)');
  $req->execute(['username' => $_POST['username']]);
  $user = $req->fetch();
  if(!empty($user)){
    if(password_verify($_POST['password'], $user->password)){
      session_start();
      $_SESSION['auth'] = $user;
      header('location: account.php');
      exit();
    }else{
      $errors='Mot de passe incorrect';
    }
  }else{
    $errors='Identifiant incorrect';
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

    <div class="connect">
          <form class="connex" action="" method="post">
            <h2 class="titre">Connexion</h2>
            <?php if(!empty($errors)): ?>
              <div class="alert alert-danger">
                <p>Vous n'avez pas rempli le formulaire correctement</p>
                <ul>
                  <li><?php echo $errors; ?></li>
                </ul>
              </div>
            <?php endif; ?>
          <label for""></label><input type="text" name="username" value="" placeholder="e-mail ou pseudo"><br>
          <label for""></label><input type="password" name="password" value="" placeholder="mot de passe"><br>
          <!--<p id="forgot"><a href="#">(Mot de passe oublié ?)</a></p>-->
          <input id="co" type="submit" name="" value="Se connecter">
          <p id="goregister">Vous n'avez pas de compte ? <a href="register.php">Inscrivez vous</a></p>
          </form>
      </div>

  </main>

<?php include 'inc/footer.php'; ?>
