
<?php include("cabecalho.php")?>
<?php include("logica-usuario.php")?>

<?php if(isset($_GET["logout"]) && $_GET["logout"]==true){?>
       <p class = "alert-success">Deslogado com sucesso!</a>
<?php }?>
<?php if(isset($_GET["login"]) && $_GET["login"]==true){?>
       <p class = "alert-success">Logado com sucesso!</a>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"]==false){?>
      <p class = "alert-danger">Usuário ou senha inválido</a>
<?php } ?>

<?php if (isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"]==true) { ?>
      <p class = "alert-danger">Você não tem acesso"</a>
<?php } ?>

   <h2>Bem Vindo!</h2>
   <?php if(usuarioEstaLogado()){?>
       <p class = "text-success">Usuário logado como: <?=usuarioLogado()?><a href = "logout.php"> Deslogar</a></p>

   <?php }else{ ?>

   	
   <form action = "login.php" method = "post">
      <table class = "table">
         <tr>
	   <td>E-mail</td>
	   <td><input class = "form-control" type = "email" name = "email"></td>
	 </tr>
        <tr>
	  <td>Senha</td>
	  <td><input class = "form-control" type = "password" name = "senha"></td>
        </tr>
	<tr>
	  <td><button type = "submit" class = "btn btn-primary">Login</button></td>
        </tr>
     </table>
   </form>
  <?php } ?>
<?php (include "rodape.php")?>
		
