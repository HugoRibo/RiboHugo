<?php
session_start();
unset($_SESSION['auth']);
session_unset();
session_destroy();
header('location:index.php');
?>
