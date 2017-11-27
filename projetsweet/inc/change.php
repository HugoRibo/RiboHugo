<?php
  session_start();
  if(isset($_GET['del'])){
    unset($_SESSION['panier'][$_GET['del']]);
    $_SESSION['panier'] = array_merge($_SESSION['panier']);
  }
  if(isset($_GET['modifid'])){
    $_SESSION['panier'][$_GET['modifid']]['Quantité'] = $_GET['modifval'];
  }
