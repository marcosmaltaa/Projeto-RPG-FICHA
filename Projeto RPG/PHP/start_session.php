<?php
   // startando a sessão
   session_start();
   // verificando se a sessão existe
   if(!isset($_SESSION['nome'])){
       header('location: ../login.html');
       exit;
   }
?>