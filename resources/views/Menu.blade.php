<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">

    <title>Controle Aluguel</title>
    ​
  </head>
  <body>
    <div class="interface">
    <header class="cabecalho">
      <a href={{route("menu")}}><img src="img/logo.png" width="150px" height="100px"> </a>
      <h2>Sistema para controle do aluguel de temporada!</h2>
    <button class="icone"><a href={{route("login")}}> SAIR</a></button>

    </header>

      <div class ='menu'>
        <nav>
          <li><a href={{route("menu_calendario")}}>Calendários:</a></li>
          <li><a href={{route("criar_reserva")}}>Criar Reserva</a></li>
          <li><a href={{route("menu_valores")}}>Valores</a></li>
          <li><a href={{route("menu_prop")}}>Dados dos proprietários</a></li>
          <li><a href={{route("clientes_cadastrados")}}>Clientes</a></li>
          <li><a href={{route("menu")}}>Realizar contrato</a></li>

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
