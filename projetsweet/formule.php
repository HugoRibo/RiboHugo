<?php
  session_start();

  if(!empty($_POST)){
    if(empty($_SESSION['panier'])){
      $_SESSION['panier'] = array();
    }

    if(isset($_POST['formstudent'])){
      if($_POST['formstudent'] > 0){
        array_push($_SESSION['panier'], array(
          'Nom' => "Menu Etudiant",
          'Type' => $_POST['choixstudent'],
          'Quantité' => $_POST['formstudent'],
          'Prix' => 5.50
        ));
        $success['student'] = "Vos choix ont bien été ajoutés au panier ! ";
      }elseif($_POST['formstudent'] < 0){
        $error['student'] = "Le nombre de formule ne peut pas être négatif";
      }elseif($_POST['formstudent'] == 0){

      }
    }

    if(isset($_POST['formmidi'])){
      if($_POST['formmidi'] > 0){
        array_push($_SESSION['panier'], array(
          'Nom' => "Menu Midi",
          'Type' => $_POST['choixmidi'],
          'Quantité' => $_POST['formmidi'],
          'Prix' => 6.50
        ));
        $success['midi'] = "Vos choix ont bien été ajoutés au panier ! ";
      }elseif($_POST['formmidi'] < 0){
        $error['midi'] = "Le nombre de formule ne peut pas être négatif";
      }elseif($_POST['formmidi'] == 0){

      }
    }

    if(isset($_POST['formfamily'])){
      if($_POST['formfamily'] > 0){
        array_push($_SESSION['panier'], array(
          'Nom' => 'Menu Family',
          'Type' => "Menu Family",
          'Quantité' => $_POST['formfamily'],
          'Prix' => 21
        ));
        $success['family'] = "Vos choix ont bien été ajoutés au panier ! ";
      }elseif($_POST['formfamily'] < 0){
        $error['family'] = "Le nombre de formule ne peut pas être négatif";
      }elseif($_POST['formfamily'] == 0){

      }
    }

    if(isset($_POST['sweetfoor'])){
      if($_POST['sweetfoor'] > 0){
        array_push($_SESSION['panier'], array(
          'Nom' => 'Sweet foor',
          'Type' => "Formule",
          'Quantité' => $_POST['sweetfoor'],
          'Prix' => 20
        ));
        $success['sweetfoor'] = "Vos choix ont bien été ajoutés au panier ! ";
      }elseif($_POST['sweetfoor'] < 0){
        $error['sweetfoor'] = "Le nombre de formule ne peut pas être négatif";
      }elseif($_POST['sweetfoor'] == 0){

      }
    }

    if(isset($_POST['sweetkid'])){
      if($_POST['sweetkid'] > 0){
        array_push($_SESSION['panier'], array(
          'Nom' => 'Sweet Kid',
          'Type' => $_POST['choixsweetkid'],
          'Quantité' => $_POST['sweetkid'],
          'Prix' => 4.50
        ));
        $success['sweetkid'] = "Vos choix ont bien été ajoutés au panier ! ";
      }elseif($_POST['sweetkid'] < 0){
        $error['sweetkid'] = "Le nombre de formule ne peut pas être négatif";
      }elseif($_POST['sweetkid'] == 0){

      }
    }

    if(isset($_POST['twosweet'])){
      if($_POST['twosweet'] > 0){
        array_push($_SESSION['panier'], array(
          'Nom' => 'Two Sweet',
          'Type' => 'Formule',
          'Quantité' => $_POST['twosweet'],
          'Prix' => 14.00
        ));
        $success['twosweet'] = "Vos choix ont bien été ajoutés au panier ! ";
      }elseif($_POST['twosweet'] < 0){
        $error['twosweet'] = "Le nombre de formule ne peut pas être négatif";
      }elseif($_POST['twosweet'] == 0){

      }
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
  <link rel="stylesheet" href="css/formule.css">
</head>
<body>
<?php include 'inc/header.php'; ?>

  <!-- TITRE -->
  <section>
    <div class="a">
      <h1 id="titre">nos formules</h1>
    </div>
  </section>
  <form class="" action="" method="post">
  <div class="flex_formule">
    <div class="flip">
      <h2 class="titre_form">menu etudiant</h2>
      <ul class="liste_menu">
        <li>Pizza 1 personne + boisson 33cl</li>
        <li>ou</li>
        <li>8 wings + potatoes + boisson 33cl</li>
        <li>ou</li>
        <li>Panini + boisson 33cl</li>
        <li>ou</li>
        <li>Salade au choix + boisson</li>
        <li>5.50€</li>
      </ul>
      <?php if(!empty($error['student'])) : ?>
        <?= $error['student']; ?>
      <?php endif; ?>
      <?php if(isset($success['student'])): ?>
        <?= $success['student']; ?>
      <?php endif; ?>
      </p>
      <div class="addpanier">
          <label for="">Choix : </label>
            <select class="choice" name="choixstudent">
              <option value="Pizza">Pizza</option>
              <option value="Wings">Wings</option>
              <option value="Panini">Panini</option>
              <option value="Salade">Salade</option>
            </select>
          <br><label for="">Nombre de menu</label>
          <div class="linefdp">
            <div class="reau"><img class="goch FeS-" src="img/icocones/moins.png"><p class="valeur FeS">0</p><img class="droit FeS+" src="img/icocones/plus.png"></div>
          </div>
          <div class="hidden hd1"></div>
      </div>
    </div>

    <div class="flip">
      <h2 class="titre_form">Menu midi</h2>
      <ul class="liste_menu">
        <li>pizza 1 personne</li>
        <li>+</li>
        <li>boisson 33cl</li>
        <li>ou</li>
        <li>8 wings</li>
        <li>+</li>
        <li>potatoes</li>
        <li>+</li>
        <li>boisson 33cl</li>
        <li>6.50€</li>
      </ul>
      <?php if(!empty($error['midi'])) : ?>
        <?= $error['midi']; ?>
      <?php endif; ?>
      <?php if(isset($success['midi'])): ?>
        <?= $success['midi']; ?>
      <?php endif; ?>
      </p>
      <div class="addpanier">
          <label for="">Choix : </label>
            <select class="choice" name="choixmidi">
              <option value="Pizza">Pizza</option>
              <option value="Wings">Wings</option>
            </select>
          <br><label for="">Nombre de menu</label>
          <div class="linefdp">
            <div class="reau"><img class="goch FmS-" src="img/icocones/moins.png"><p class="valeur FmS">0</p><img class="droit FmS+" src="img/icocones/plus.png"></div>
          </div>
          <div class="hidden hd2"></div>
      </div>
    </div>

    <div class="flip">
      <h2 class="titre_form">menu sweet kid</h2>
      <ul class="liste_menu">
        <li>1 pizza 1 personne</li>
        <li>ou</li>
        <li>4 nuggets et potatoes</li>
        <li>+</li>
        <li>Kinder ou brownie</li>
        <li>+</li>
        <li>jus de fruit</li>
        <li>4.50€</li>
      </ul>
      <?php if(!empty($error['sweetkid'])) : ?>
        <?= $error['sweetkid']; ?>
      <?php endif; ?>
      <?php if(isset($success['sweetkid'])): ?>
        <?= $success['sweetkid']; ?>
      <?php endif; ?>
      </p>
      <div class="addpanier">
          <label for="">Choix : </label>
            <select class="choice" name="choixsweetkid">
              <option value="Pizza">Pizza</option>
              <option value="Wings">Nuggets</option>
            </select>
          <br><label for="">Nombre de menu</label>
          <div class="linefdp">
            <div class="reau"><img class="goch FskS-" src="img/icocones/moins.png"><p class="valeur FskS">0</p><img class="droit FskS+" src="img/icocones/plus.png"></div>
          </div>
          <div class="hidden hd5"></div>
      </div>
    </div>

    <div class="flip formfamily">
      <h2 class="titre_form">menu family</h2>
      <ul class="liste_menu">
        <li>16 chicken wings</li>
        <li>+</li>
        <li>8 nuggets</li>
        <li>+</li>
        <li>8 onion rings</li>
        <li>+</li>
        <li>6 nems</li>
        <li>+</li>
        <li>1 bouteille 1.5L</li>
        <li>21€</li>
      </ul>
      <?php if(!empty($error['family'])) : ?>
        <?= $error['family']; ?>
      <?php endif; ?>
      <?php if(isset($success['family'])): ?>
        <?= $success['family']; ?>
      <?php endif; ?>
      </p>
      <div class="addpanier">
          <br><label for="">Nombre de menu</label>
          <div class="linefdp">
            <div class="reau"><img class="goch FfS-" src="img/icocones/moins.png"><p class="valeur FfS">0</p><img class="droit FfS+" src="img/icocones/plus.png"></div>
          </div>
          <div class="hidden hd3"></div>
      </div>
    </div>

    <div class="flip">
      <h2 class="titre_form">menu sweet four</h2>
      <ul class="liste_menu">
        <li>1 pizza mega</li>
        <li>+</li>
        <li>1 bouteille 1.5L</li>
        <li>+</li>
        <li>4 desserts (sauf glace)</li>
        <li>20€</li>
      </ul>
      <?php if(!empty($error['sweetfoor'])) : ?>
        <?= $error['sweetfoor']; ?>
      <?php endif; ?>
      <?php if(isset($success['sweetfoor'])): ?>
        <?= $success['sweetfoor']; ?>
      <?php endif; ?>
      </p>
      <div class="addpanier">
          <br><label for="">Nombre de menu</label>
          <div class="linefdp">
            <div class="reau"><img class="goch FsfS-" src="img/icocones/moins.png"><p class="valeur FsfS">0</p><img class="droit FsfS+" src="img/icocones/plus.png"></div>
          </div>
          <div class="hidden hd4"></div>
      </div>
    </div>



    <div class="flip">
      <h2 class="titre_form">menu two sweet</h2>
      <ul class="liste_menu">
        <li>1 pizza senior</li>
        <li>+</li>
        <li>2 boissons 33cl</li>
        <li>+</li>
        <li>2 desserts (sauf glace)</li>
        <li>14€</li>
      </ul>
      <?php if(!empty($error['twosweet'])) : ?>
        <?= $error['twosweet']; ?>
      <?php endif; ?>
      <?php if(isset($success['twosweet'])): ?>
        <?= $success['twosweet']; ?>
      <?php endif; ?>
      </p>
      <div class="addpanier">
          <br><label id="nbmenu" for="">Nombre de menu</label>
          <div class="linefdp">
            <div class="reau"><img class="goch FtsS-" src="img/icocones/moins.png"><p class="valeur FtsS">0</p><img class="droit FtsS+" src="img/icocones/plus.png"></div>
          </div>
          <div class="hidden hd6"></div>
      </div>
    </div>
      <input id="formule_input" type="submit" name="" value="Ajouter au panier">
  </div>
  </form>

<?php include 'inc/footer.php'; ?>
