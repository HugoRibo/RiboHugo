<?php

  session_start();

  if(!empty($_POST)){
    if(empty($_SESSION['panier'])){
      $_SESSION['panier'] = array();
    }
    if($_POST['senior'] > 0){
      array_push($_SESSION['panier'], array(
        'Nom' => "Vegetarienne",
        'Type' => "Senior",
        'Quantité' => $_POST['senior'],
        'Prix' => 7.50
      ));
    }elseif($_POST['senior'] < 0){
      $error = "Le nombre de pizza ne peut pas être négatif";
    }elseif($_POST['senior'] == 0){

    }
    if($_POST['mega'] > 0){
      array_push($_SESSION['panier'], array(
        'Nom' => "Vegetarienne",
        'Type' => "Mega",
        'Quantité' => $_POST['mega'],
        'Prix' => 10.50
    ));
    }elseif($_POST['mega'] < 0){
      $error = "Le nombre de pizza ne peut pas être négatif";
    }elseif($_POST['mega'] == 0){

    }
    if(empty($error)){
      $success = "Vos choix ont bien été ajoutés à votre panier";
    }
  }

  include '../inc/headerproduct.php';

?>


<main>


  <div class='flexpiz'>
    <div class="pizza piz1"></div>

    <div class="right">
    <div class="pizzadescr">
      <h2>Calzone</h2>
      <p class="recette">Sauce tomate;( au choix, jambon, poulet, ou thon), mozzarella, oeuf</p><br>
      <p>Senior : 7.50€ / Diamètre : 33 cm</p>
      <p>Mega : 10.50€ / Diamètre : 40 cm</p><br>

    </div>


          <?php if(!empty($error)) : ?>
            <div class="errorbad">
              <?= $error; ?>
            </div>
            <?php endif; ?>
          <?php if(isset($success)): ?>
            <div class="errorgood">
            <?= $success; ?>
          </div>
          <?php endif; ?>

      <div class="addpanier">
        <form class="" action="" method="post">
              <div class="titletype"><p class="type type1">quantité senior<p><p class="type type2">quantité mega<p></div>
                <div class="linefdp">
              <div class="reau reau1"><img class="goch S-" src="../img/icocones/moins.png"><p class="valeur S">0</p><img class="droit S+" src="../img/icocones/plus.png"></div>
              <div class="reau reau2"><img class="goch M-" src="../img/icocones/moins.png"><p class="valeur M">0</p><img class="droit M+" src="../img/icocones/plus.png"></div>
            </div>
            <div class="hidden hd1"></div>
            <div class="hidden hd2"></div>
          <input type="submit" name="" value="Ajouter">
        </form>
      </div>
    </div>
  </div>
</main>

<?php include '../inc/footerproduct.php'; ?>
