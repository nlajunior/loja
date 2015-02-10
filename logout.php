<?php 
   include ("logica-usuario.php");
   logout();
   Header("Location: index.php?logout=true");
   die();

?>

