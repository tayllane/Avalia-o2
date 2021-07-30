<?php
include_once 'conexao.php';
?>
<html>
<h1> Cadastrar </h1>
<body>
 <form name= "form" action="usuarios.php" method = "POST">
 	 <br><label for="nome_login">Nome Completo:</label></br>
 	 <input type=text name =nome>
 	 <br><label for="nome_login">Seu e-mail:</label> </br>
 	 <input type-text name = email>
 	 <br><label for="nome_login">Nome de usuario:</label> </br>
 	 <input type-text name = usuario>
 	 <br><label for="nome_login">Sua senha:</label></br>
  	<input type-text name = senha><br><br>
<input type = submit name = "senha">
 <p class="link">
            <a href="login.html">Fazer login</a>
          </p>
</form>
</body>
</html>