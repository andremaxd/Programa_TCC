<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <title>Controle Aluguel</title>


  
    <link href='vendor/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='vendor/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />

  </head>



  <body>
    <div class="interface">
      <header class="cabecalho">
        <a href={{route("menu")}}><img src="img/logo.png" width="150px" height="100px"> </a>
        <h2> 03 DORMITÓRIOS: </h2>
      </header>
      <button class="icone"><a href={{route("menu_calendario")}}> VOLTAR </a></button>  

      <div class="calendario">
      <section class="corpo">
        <p><h2>Apartamentos:</h2></p>
        @foreach ($reservas as $reserva)
        <p onclick='seleciona_ap("{{$reserva->ap}}")'>{{$reserva->Apartamento['residencial']}} - {{$reserva->ap}}</p>
        @endforeach

      </section>

      <aside class="lateral">
        <div id='calendar'></div>

      </aside>

    </div>
        
      <footer class="rodape">
        <p>Copyright &copy; 2019 - by André Max Dorneles</p>
        <p>Trabalho de conclusão de curso.</p>
      </footer>
    </div>
    



    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js'></script>
    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>
<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
<script src="http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js"></script>
<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script>
  
    <script src='vendor/fullcalendar/packages/core/main.js'></script>
    <script src='vendor/fullcalendar/packages/daygrid/main.js'></script>

    <script>
      function seleciona_ap(id){
        $('#calendar').fullCalendar('destroy')
        console.log("caiu")
        var reservas = {!! json_encode($reservas->toArray()) !!};
        let array_event=[];

        reservas.forEach(function(unit){
          if(id==unit.ap){
              array_event.push({title : unit.ap, start : unit.entrada, end : unit.saida});
          }
        });

        console.log(array_event)

        var calendar = $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
          var title = prompt('Event Title:');
          if (title) {
            calendar.fullCalendar('renderEvent',
              {
                title: title,
                start: start,
                end: end,
                allDay: allDay
              },
              true // make the event "stick"
            );
          }
          calendar.fullCalendar('unselect');
        },
        editable: true,
        events: array_event
      });
      }



      $(document).ready(function() {
        var calendar = $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
          var title = prompt('Event Title:');
          if (title) {
            calendar.fullCalendar('renderEvent',
              {
                title: title,
                start: start,
                end: end,
                allDay: allDay
              },
              true // make the event "stick"
            );
          }
          calendar.fullCalendar('unselect');
        },
        editable: true
      });
      
    });

    </script>
  </body>
</html>
