<?php
  define('MYSQL_HOST', 'localhost');
  define('MYSQL_USER', 'root');
  define('MYSQL_PASSWD', '');
  define('MYSQL_DB', 'sweet');

  try {
      $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB, MYSQL_USER, MYSQL_PASSWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
      $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
      $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  } catch (PDOException $e) {
      $e->getMessage();
  }
