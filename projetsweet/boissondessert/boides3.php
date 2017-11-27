<?php

  session_start();

  if(!empty($_POST)){
    if(empty($_SESSION['panier'])){
      $_SESSION['panier'] = array();
    }
    if($_POST['boisson'] > 0){
      array_push($_SESSION['panier'], array(
        'Nom' => $_POST['choix'],
        'Type' => "Boisson 1.5L",
        'Quantité' => $_POST['boisson'],
        'Prix' => 2.50
      ));
      $success = "Vos choix ont bien été ajoutés au panier ! ";
    }elseif($_POST['boisson'] < 0){
      $error = "Le nombre de boisson ne peut pas être négatif";
    }elseif($_POST['boisson'] == 0){

    }
  }

  include '../inc/headerproduct.php';

?>


<main>

<div class='flexpiz'>
  <div class="pizza dessert1"></div>
  <div class="right">
  <div class="pizzadescr">
    <h2>Boisson 1.5 L</h2>
    <p class="boidesprice">Prix : 2.50€</p><br>
  </div>
    <p>
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
    </p>
    <div class="addpanier">
    <form class="boidesform" action="" method="post">
   <div class="boisson"><p class="choixbois">Choisissez votre boisson</p>
      <select class="reaureaureau selectboi" name="choix">
        <option class="selectboi" value="Coca">Coca</option>
        <option class="selectboi" value="Pepsi">Pepsi</option>
        <option class="selectboi" value="Ice-Tea">Ice-Tea</option>
        <option class="selectboi" value="Sprite">Sprite</option>
        <option class="selectboi" value="Oasis">Oasis</option>
      </select>
    </div>
    <div class="tityquan">
      <p class="choixbois">Nombre de boisson</p>
      <div class="linefdp">
        <div class="reau reaureaureau"><img class="goch PsS-" src="../img/icocones/moins.png"><p class="valeur PsS">0</p><img class="droit PsS+" src="../img/icocones/plus.png"></div>
      </div>

      <div class="hidden hd1"></div>

    </div>
      <input type="submit" name="" value="Ajouter">
    </form>
  </div>
  </div>
</div>

</main>

<?php include '../inc/footerproduct.php'; ?>
