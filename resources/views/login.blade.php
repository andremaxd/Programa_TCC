<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
    <div>
		
		<div class="tela">
			<img src="img/logo.png" width="180px" height="100px">

			<label for="email">E-MAIL</label>
			<input type="email" name="tMail" class="cMail" size="20" maxlength="40" placeholder="Email">

			<label for="Senha">SENHA</label>
			<input type="password" name="tSenha" class="cSenha" size="8" maxlength="8" placeholder="Senha">
			<button type="button" value="enviar" ><a href={{route("menu")}}> ENTRAR</a></button>

		</div>

	</div>

<footer class="rodape">
      <p>Copyright &copy; 2019 - by André Max Dorneles</p>
      <p>Trabalho de conclusão de curso.</p>
    </footer>

</body>
</html>