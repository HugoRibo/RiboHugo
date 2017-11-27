<?php

function logged_only(){
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
  if(!isset($_SESSION['auth'])){
    header('Location: login.php');
    exit();
  }
}

function admin_only(){
  if(session_status() == PHP_SESSION_NONE){
    session_start();
  }
  if(!isset($_SESSION['auth']) || $_SESSION['auth']->admin == NULL ){
    header('Location: account.php');
    exit();
  }
}


?>
