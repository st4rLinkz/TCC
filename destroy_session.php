<?php
   session_start();
   session_destroy();
   header('Location: carrinho.php');
   exit();
?>