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
  <link rel="stylesheet" href="css/pizza.css">
</head>
<body>
<?php include 'inc/header.php'; ?>
    <h1>Nos pizzas </h1>

    <div id='choix'>
      <button id='all'>- Toutes -</button>
      <button id='tomate'>- Sauce tomate -</button>
      <button id='frais'>- Creme fraiche -</button>
      <button id='monde'>- Pizzas du monde -</button>
    </div>

    <div id="flexpiz">

      <div id='1' class="gridpiz tomate piz1">
        <div class='namepizza'>Vegetarienne</div>
        <div class='more'>
          <p>Sauce Tomate, Mozzarella, Champignons,Poivrons, Olives</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 10.50€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='2' class="gridpiz tomate piz2">
        <div class='namepizza'>Margherita</div>
        <div class='more'>
          <p>Sauce tomate, mozzarella</p><br>
          <p>Senior: 5.00€ / Diamètre : 33cm</p>
          <p>Mega : 8.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='3' class="gridpiz tomate piz3">
        <div class='namepizza'>Regina</div>
        <div class='more'>
          <p>Sauce tomate, jambon, mozzarella, champignons</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 10.50€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='4' class="gridpiz tomate piz4">
        <div class='namepizza'>4 Fromages</div>
        <div class='more'>
          <p>Sauce tomate, emmental, mozzarella, chêvre, brie</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 10.50€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='5' class="gridpiz tomate piz5">
        <div class='namepizza'>Orientale</div>
        <div class='more'>
          <p>Sauce tomate, mozzarella, merguez, poivrons, oignons, oeuf</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='6' class="gridpiz tomate piz6">
        <div class='namepizza'>Chicken</div>
        <div class='more'>
          <p>Sauce tomate, poulet émincé, mozzarella, pommes de terre, oeuf</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 10.50€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='7' class="gridpiz tomate piz7">
        <div class='namepizza'>Chef</div>
        <div class='more'>
          <p>Sauce tomate, viande hachée, mozzarella, poivrons, oignons, oeuf</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 10.50€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='8' class="gridpiz tomate piz8">
        <div class='namepizza'>4 Saisons</div>
        <div class='more'>
          <p>Sauce tomate, jambon, mozzarella, artichauts, champignons, olives</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='9' class="gridpiz tomate piz9">
        <div class='namepizza'>Tonino</div>
        <div class='more'>
          <p>Sauce tomate, thon, mozzarella, olives, oeuf</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 10.50€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='10' class="gridpiz tomate piz10">
        <div class='namepizza'>Fruits de mer</div>
        <div class='more'>
          <p>Sauce tomate, thon, mozzarella, cocktail de fruits de mer</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='11' class="gridpiz tomate piz11">
        <div class='namepizza'>Napolitaine</div>
        <div class='more'>
          <p>Sauce tomate, mozzarella, anchois, câpres, olives</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='12' class="gridpiz tomate piz12">
        <div class='namepizza'>Buffalo</div>
        <div class='more'>
          <p>Sauce tomate, chorizo, viande hachée, mozzarella, merguez, champignons</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='13' class="gridpiz tomate piz13">
        <div class='namepizza'>Texane</div>
        <div class='more'>
          <p>Sauce tomate, jambon, poulet fumé, viande hachée, mozzarella, merguez</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='14' class="gridpiz tomate piz14">
        <div class='namepizza'>Country</div>
        <div class='more'>
          <p>Sauce tomate, jambon,viande hachée, mozzarella, lardons, champignons</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='15' class="gridpiz tomate piz15">
        <div class='namepizza'>Caraïbe</div>
        <div class='more'>
          <p>Sauce tomate, émincés de poulet, mozzarella, ananas</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='16' class="gridpiz tomate piz16">
        <div class='namepizza'>Calzone</div>
        <div class='more'>
          <p>Sauce tomate;( au choix, jambon, poulet, ou thon), mozzarella, oeuf</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 10.50€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='17' class="gridpiz tomate piz17">
        <div class='namepizza'>Mexicaine</div>
        <div class='more'>
          <p>Sauce tomate, chorizo, mozzarella, merguez, poivrons, olives</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='18' class="gridpiz frais piz18">
        <div class='namepizza'>La Kebab</div>
        <div class='more'>
          <p>Crème Fraîche, Kebab, Mozzarella, Poivrons, Oignons Rouges </p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='19' class="gridpiz frais piz19">
        <div class='namepizza'>Fermière</div>
        <div class='more'>
          <p>crème fraîche, mozzarella, lardons, pommes de terre, oignons, oeuf</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='20' class="gridpiz frais piz20">
        <div class='namepizza'>Norvégienne</div>
        <div class='more'>
          <p>Crème fraîche, saumon, mozzarella</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='21' class="gridpiz frais piz21">
        <div class='namepizza'>Super Chicken</div>
        <div class='more'>
          <p>Crème fraîche, poulet fumé, mozzarella, pommes de terre, oeuf</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='22' class="gridpiz frais piz22">
        <div class='namepizza'>Paysanne</div>
        <div class='more'>
          <p>Crème fraîche, jambon, mozzarella, pommes de terre, champignons</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='23' class="gridpiz frais piz23">
        <div class='namepizza'>Calzone 4 fromages</div>
        <div class='more'>
          <p>crème fraîche, emmental, mozzarella, chèvre, brie</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 10.50€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='24' class="gridpiz frais piz24">
        <div class='namepizza'>Chicken tikka</div>
        <div class='more'>
          <p>Crème fraîche, poulet tikka, mozzarella, pommes de terre, oignons, oeuf</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='25' class="gridpiz frais piz25">
        <div class='namepizza'>La normande</div>
        <div class='more'>
          <p>Crème fraîche, poulet fumé, mozzarella, poivrons, pommes de terre, oeuf</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='26' class="gridpiz frais piz26">
        <div class='namepizza'>La Sweet</div>
        <div class='more'>
          <p>Crème fraîche, poulet fumé, mozzarella, boursin, oignons</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='27' class="gridpiz frais piz27">
        <div class='namepizza'>Maroilles</div>
        <div class='more'>
          <p>Crème fraîche, mozzarella, maroillles, saucisses, lardons, champignons, oeuf</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='28' class="gridpiz monde piz28">
        <div class='namepizza'>Barbecue</div>
        <div class='more'>
          <p>Sauce barbecue, émincés de poulet, mozzarella, bacon de boeuf, oignons, poivrons</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='29' class="gridpiz monde piz29">
        <div class='namepizza'>Chèvre-Miel</div>
        <div class='more'>
          <p>Crème fraîche, emmental, mozzarella, chèvre, persil, miel</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='30' class="gridpiz monde piz30">
        <div class='namepizza'>Indienne</div>
        <div class='more'>
          <p>Sauce curry, émincés de poulet, mozzarella, poivrons, oignons</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

      <div id='31' class="gridpiz monde piz31">
        <div class='namepizza'>La Chilienne</div>
        <div class='more'>
          <p>Sauce tomate, viande hachée, haricots rouges, mozzarella, oignons, poivrons, piment</p><br>
          <p>Senior : 7.50€ / Diamètre : 33 cm</p>
          <p>Mega : 11.00€ / Diamètre : 40 cm</p>
        </div>
        <div class='add'><img src="img/add.png" alt=""></div>
      </div>

    </div>

  </main>
<?php include 'inc/footer.php'; ?>
