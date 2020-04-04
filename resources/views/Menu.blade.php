<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <title>Controle Aluguel</title>
  </head>

  <body>
    <div class="interface">
      <header class="cabecalho">
        <a href={{route("menu")}}> <img src="img/logo.png" width="150px" height="100px"> </a>
        <h2>Sistema para controle do aluguel de temporada!</h2>
        <button class="icone"><a href={{route("login")}}> SAIR</a></button>
      </header>

      <div class ='menu'>
        <nav>
          <a href={{route("menu_calendario")}}><li>Calendários:</li></a>
          <a href={{route("criar_reserva")}}><li>Criar Reserva</li></a>
          <a href={{route("menu_valores")}}><li>Valores</li></a>
          <a href={{route("menu_prop")}}><li>Dados dos proprietários</li></a>
          <a href={{route("clientes_cadastrados")}}><li>Clientes</li></a>
        </nav>
      </div>

      <footer class="rodape">
        <p>Copyright &copy; 2019 - by André Max Dorneles</p>
        <p>Trabalho de conclusão de curso.</p>
      </footer>
    ​</div>
  </body>
  ​
</html>
