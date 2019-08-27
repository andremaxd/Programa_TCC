<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <title>Criar Reserva</title>

  </head>

  <body>
    <div class="interface">
      <header class="cabecalho">
        <a href={{route("menu")}}> <img src="img/logo.png" width="150px" height="100px"> </a>
        <h2> CADASTRO: </h2>
      </header>

      <button class="icone"><a href={{route("menu")}}> VOLTAR </a></button>

      <div class ='menu'>
        <nav>
          <li><a href={{route("cadastrar_cliente")}}>Cadastrar novo cliente</a></li>
          <li><a href={{route("cadastrar_reserva")}}>Cadastrar nova reserva</a></li>
        </nav>
      </div>
            
      <footer class="rodape">
        <p>Copyright &copy; 2019 - by André Max Dorneles</p>
        <p>Trabalho de conclusão de curso.</p>
      </footer>
    </div>
  </body>
</html>