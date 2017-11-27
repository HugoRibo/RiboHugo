<?php

  session_start();

  if(!empty($_POST)){
    if(empty($_SESSION['panier'])){
      $_SESSION['panier'] = array();
    }
    if($_POST['boisson'] > 0){
      array_push($_SESSION['panier'], array(
        'Nom' => "Tiramisu",
        'Type' => "Tiramisu",
        'Quantité' => $_POST['boisson'],
        'Prix' => 2.50
      ));
      $success = "Vos choix ont bien été ajoutés au panier ! ";
    }elseif($_POST['boisson'] < 0){
      $error = "Le nombre de tartes ne peut pas être négatif";
    }elseif($_POST['boisson'] == 0){

    }
  }

  include '../inc/headerproduct.php';

?>

  <main>

    <div class='flexpiz'>
      <div class="pizza dessert9"></div>
      <div class="right">
      <div class="pizzadescr">
        <h2>Tiramisu</h2>
        <p>Prix : 2.50€</p><br>
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
          <label for="">Nombre de Tiramisu</label>
          <div class="linefdp">
            <div class="reau"><img class="goch PsS-" src="../img/icocones/moins.png"><p class="valeur PsS">0</p><img class="droit PsS+" src="../img/icocones/plus.png"></div>
          </div>
          <div class="hidden hd1"></div>
          <input type="submit" name="" value="Ajouter">
        </form>
      </div>
      </div>
    </div>
  </main>

<?php include '../inc/footerproduct.php'; ?>
