<?php
  session_start();
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
</head>
<body>
<?php include 'inc/header.php'; ?>

  <div id="owl-pizza" class="owl-carousel owl-theme">
    <div class="owl-slide">
      <div class="title">
        <h1>SWEET PIZZA</h1>
        <p>03 27 24 08 62 / 09 67 11 07 96 </p>
      </div>
    </div>
    <div class="owl-slide2">
      <div class="title">
        <h1>SWEET PIZZA</h1>
        <p>Suivez nous sur facebook</p>
      </div>
    </div>
    <div class="owl-slide3">
      <div class="title">
        <h1>SWEET PIZZA</h1>
        <p>152 Rue du Quesnoy, 59300 Valenciennes</p>
      </div>
      <div class="owl--text"></div>
    </div>
  </div>

  <main>
    <div class='flexbox'>
      <div class="gridproduct grid1">
        <div class="nameproduct product1">
          <h2><a href="">Formule du moment</a></h2>.
          <button><a href="">Voir plus</a></button>
        </div>
      </div>

      <div class="gridproduct grid3">
        <div class="nameproduct product2">
          <h2><a href="">Pizza du moment</a></h2>
          <button><a href="">Voir plus</a></button>
        </div>
      </div>
    </div>

    <div class="flexbox">
      <div id="iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81438.45979503651!2d3.463340658480046!3d50.36745195558882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2ed9500e03ee1%3A0x758fb7800cc3ffc8!2sSweet+Pizza!5e0!3m2!1sfr!2sfr!4v1509105370037" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div id="contact">
          <p id ='horaire'>
            <span>Horaires d'ouverture :</span> <br><br>
            Ouvert 7j/7 même les jours fériers <br><br>
            Lundi - Jeudi : 11H30 à 14H & 18H à 22H <br>
            Vendredi - Samedi : 11H30 à 14H & 18H à 23H <br>
            Dimanche : 18H30 à 22H <br>
          </p><br>
          <p id='livraison'>
            Sur place ou à emporter/livraison à domicile et au bureau (à partir de 10€)<br>
            03 27 24 08 62 / 09 67 11 07 96
          </p>
      </div>

    </div>
  </main>

<?php include 'inc/footer.php'; ?>
