<?php

  session_start();

  if(!empty($_POST)){
    if(empty($_SESSION['panier'])){
      $_SESSION['panier'] = array();
    }
    if($_POST['salade'] > 0){
      array_push($_SESSION['panier'], array(
        'Nom' => "Salade Grecque",
        'Type' => "Salade",
        'Quantité' => $_POST['salade'],
        'Prix' => 5.50
      ));
      $success = "Vos choix ont bien été ajoutés au panier ! ";
    }elseif($_POST['salade'] < 0){
      $error = "Le nombre de salade ne peut pas être négatif";
    }elseif($_POST['salade'] == 0){

    }
  }

  include '../inc/headerproduct.php';

?>

  <main>
    <div class='flexpiz'>
      <div class="pizza salade1"></div>
      <div class="right">
      <div class="pizzadescr">
          <h2>Salade Grecque</h2>
          <p>Salade, tomates cerises, olives, feta, échalotes</p><br>
          <p>Prix : 5.50 €</p><br>
          <p>
      </div>
            <?php if(!empty($error)) : ?>
                <?= $error; ?>
              <?php endif; ?>
            <?php if(isset($success)): ?>
              <?= $success; ?>
            <?php endif; ?>
          </p>
          <div class="addpanier">
            <form class="" action="" method="post">
              <label for="">Quantité salade</label>
              <div class="linefdp">
            <div class="reau"><img class="goch SaS-" src="../img/icocones/moins.png"><p class="valeur SaS">0</p><img class="droit SaS+" src="../img/icocones/plus.png"></div>
          </div>
          <div class="hidden hd1"></div>
              <input type="submit" name="" value="Ajouter">
            </form>
          </div>
        </div>
    </div>
  </main>

<?php include '../inc/footerproduct.php'; ?>
