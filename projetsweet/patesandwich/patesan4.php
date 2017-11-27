<?php

  session_start();

  if(!empty($_POST)){
    if(empty($_SESSION['panier'])){
      $_SESSION['panier'] = array();
    }
    if($_POST['pate'] > 0){
      array_push($_SESSION['panier'], array(
        'Nom' => $_POST['choix'],
        'Type' => "Pâtes XL",
        'Quantité' => $_POST['pate'],
        'Prix' => 6.00
      ));
      $success = "Vos choix ont bien été ajoutés au panier ! ";
    }elseif($_POST['pate'] < 0){
      $error = "Le nombre de box ne peut pas être négatif";
    }elseif($_POST['pate'] == 0){

    }
  }

  include '../inc/headerproduct.php';

?>

  <main>
    <div class='flexpiz'>
      <div class="pizza pate1"></div>
      <div class="right">
      <div class="pizzadescr">
          <h2>Box de pâtes XL</h2>
          <p>Pâtes penne Sauce au choix:</p><br>
          <p>bolognaise, carbonara, saumon.</p>
          <p>Prix : 6 €</p><br>
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
              <label for="">Choix : </label>
              <select class="" name="choix">
                <option value="Bolognaise">Bolognaise</option>
                <option value="Carbonara">Carbonara</option>
                <option value="Saumon">Saumon</option>
              </select>
              <label for="">Nombre de box de pâtes</label>
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
