<?php include("cabecalho.php")?>

<?php if(isset($_GET["login"]) && $_GET["login"]==true){?>
       <p class = "alert-success">Logado com sucesso!</a>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"]==false){?>
      <p class = "alert-danger">Usuário ou senha inválido</a>
<?php } ?>

   <h2>Login</h2>
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
<?php (include "rodape.php")?>
		
