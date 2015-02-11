<?php 
   include ("logica-usuario.php");
   logout();
   $_SESSION["success"] = "Deslogado com sucesso.";
   Header("Location: index.php");
   die();



