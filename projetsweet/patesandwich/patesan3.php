<?php

  session_start();

  if(!empty($_POST)){
    if(empty($_SESSION['panier'])){
      $_SESSION['panier'] = array();
    }
    if($_POST['pate'] > 0){
      array_push($_SESSION['panier'], array(
        'Nom' => 'Croque Mr.',
        'Type' => "",
        'Quantité' => $_POST['pate'],
        'Prix' => 2.50
      ));
      $success = "Vos choix ont bien été ajoutés au panier ! ";
    }elseif($_POST['pate'] < 0){
      $error = "Le nombre de croque Mr. ne peut pas être négatif";
    }elseif($_POST['pate'] == 0){

    }
  }

  include '../inc/headerproduct.php';

?>

  <main>
    <div class='flexpiz'>
      <div class="pizza pate3"></div>
      <div class="right">
      <div class="pizzadescr">
          <h2>Croque Mr.</h2>
          <p>Pain de mie, crème fraîche, jambon, émmental</p>
          <p>Prix : 2.50 €</p>
      </div>
      <p>
            <?php if(!empty($error)) : ?>
                <?= $error; ?>
              <?php endif; ?>
            <?php if(isset($success)): ?>
              <?= $success; ?>
            <?php endif; ?>
          </p>
          <div class="addpanier">
            <form class="" action="" method="post">
              <label for="">Nombre de Croque Mr.</label>
              <div class="linefdp">
            <div class="reau"><img class="goch PsaS-" src="../img/icocones/moins.png"><p class="valeur PsaS">0</p><img class="droit PsaS+" src="../img/icocones/plus.png"></div>
          </div>
          <div class="hidden hd1"></div>
              <input type="submit" name="" value="Ajouter">
            </form>
          </div>
        </div>
    </div>
  </main>

<?php include '../inc/footerproduct.php'; ?>
