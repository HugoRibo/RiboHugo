<?php


require_once 'inc/db.php';

if(!empty($_POST)){
  if($_POST['password'] != $_POST['password_repeat'] || empty($_POST['password'])){
    $errors['password'] =  "Vous devez saisir un mot de passe valide !";
  }
  if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['mail'] = "Le mail saisi est incorrect !";
  } else {
      $req = $PDO->prepare('SELECT * FROM users WHERE email = ?');
      $req->execute([$_POST['email']]);
      $user = $req->fetch();
      if($user){
        $errors['email'] = "Cet email est déjà utilisé pour un autre compte";
      }
  }
  if(empty($_POST['pseudo'])){
    $errors['pseudo1'] = "Vous devez saisir un pseudo !";
  }else{
    $req = $PDO->prepare('SELECT * FROM users WHERE pseudo = ?');
    $req->execute([$_POST['pseudo']]);
    $pseudo = $req->fetch();
    if($pseudo){
      $errors['pseudo'] = "Ce pseudo est déjà pris !";
    }
  }
  if(empty($errors)){
    $req = $PDO->prepare("INSERT INTO users SET pseudo = ?, email = ?, password = ?, nom_user = ?, prenom_user = ?");
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $req->execute([$_POST['pseudo'], $_POST['email'] ,$password , $_POST['nom'], $_POST['prenom']]);
    header('location:login.php');
    exit();
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
<?php include 'inc/header.php';?>

  <main>

    <div class="registre">
        <form class="regist" method="post" action="">
          <h2 class="titre">Inscription</h2>
          <?php if(!empty($errors)): ?>
            <div class="alert alert-danger">
              <p>Vous n'avez pas rempli le formulaire correctement</p>
              <ul>
                <?php foreach ($errors as $error): ?>
                  <li><?= $error; ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
          <input type="text" name="pseudo" value="" placeholder="pseudo">
          <input type="text" name="nom" value="" placeholder="Nom(facultatif)">
          <input type="text" name="prenom" value="" placeholder="Prénom(facultatif)">
          <input type="email" name="email" value="" placeholder="email">
          <input type="password" name="password" value="" placeholder="mot de passe">
          <input type="password" name="password_repeat" value="" placeholder="confirmer mot de passe">
          <input id="push" type="submit" name="" value="S'inscrire">
          <p id="goco">Vous avez déjà un compte ? <a href="login.php">Connectez vous</a></p>
        </form>
      </div>


  </main>

<?php include 'inc/footer.php'; ?>
