$(document).ready(function() {
  $("#btnLogin").click(function(){
				var username = $('form[name=Sesion] input[name=username]')[0].value;
				var password = $('form[name=Sesion] input[name=password]')[0].value;

				if (username == '' || password == '') {

				} else {
					$.ajax({
						type:"POST",
						url:"../Usuario/login",
						data:{username: username, password: password},
						success: function(response){
							if (response == '1') {
								location.href = '../Admin/index';
							}
						}
					});
				}
				return false;
		});

    $("#division").bind("change focus",function() {
      $('#equipoL').find('option').remove();
      $('#equipoV').find('option').remove();
      var division = document.getElementById('division').value;
      $.ajax({
        type: "post",
        url: "../Equipo/equipos_division",
        data: {division: division},
        success: function(response) {
          response = $.parseJSON(response);
          response.forEach(function(value) {
            $('#equipoL').append('<option value="'+value.nombre+'">'+value.nombre+'</option>');
            $('#equipoV').append('<option value="'+value.nombre+'">'+value.nombre+'</option>');
          });
        }
      });
    });

    $("#division").focus();
    $('#equipoL').change(function() {
      var equipo = document.getElementById('equipoL').value;
      $('#equipoV').find('option[value="'+equipo+'"]').remove();
    });
    $('#equipoV').change(function() {
      var equipo = document.getElementById('equipoL').value;
      $('#equipoV').find('option[value="'+equipo+'"]').remove();
    });

    $('#guardar').click(function() {
      var local = document.getElementById('equipoL').value;
      var visita = document.getElementById('equipoV').value;
      var mlocal = document.getElementById('mlocal').value;
      var mvisita = document.getElementById('mvisita').value;
      var fecha = $('input[name=fecha]').val();

      if((mlocal == mvisita) || (local == visita)){
        alert("Partido invalido!");
      }else{
        $.ajax({
          type: "post",
          url: "../Partido/nuevo",
          data: {local: local, mlocal: mlocal, visita: visita, mvisita: mvisita, fecha: fecha},
          success: function(response) {
            if (response == '1') {
              $.ajax({
                type: "post",
                url: "../Equipo/actualizar",
                data: {local: local, mlocal: mlocal, visita: visita, mvisita: mvisita},
                success: function(response) {
                  alert(response);
                }
              });
            }else{
              if (response == '2') {
                  alert('Ya jugaron 5 veces!');
              } else {
                  alert('Debe Llenar Todos Los Campos!');
              }
            }
          }
        });
      }

    });

    $("#hits").change(function() {
      var hits = document.getElementById('hits').value;
      var turnos = document.getElementById('turnos').value;
      $( "#mostrar" ).empty();
      if(hits==0||turnos==0){
        $( "#mostrar" ).append("Promedio de bateo: "+0 )
      }else{
        var pro_bateo = hits/turnos;
        var dec = pro_bateo.toFixed(3);
        $( "#mostrar" ).append("Promedio de bateo: "+dec )
      }
    });

    $("#turnos").change(function() {
      var hits = document.getElementById('hits').value;
      var turnos = document.getElementById('turnos').value;
      $( "#mostrar" ).empty();
      if(hits==0||turnos==0){
        $( "#mostrar" ).append("Promedio de bateo: "+0 )
      }else{
        var pro_bateo = hits/turnos;
        var dec = pro_bateo.toFixed(3);
        $( "#mostrar" ).append("Promedio de bateo: "+dec )
      }
    });

    $("#limpias").change(function() {
      var limpias = document.getElementById('limpias').value;
      var inning = document.getElementById('inning').value;
      $( "#mostrar2" ).empty();
      if(inning==0||limpias==0){
        $( "#mostrar2" ).append("Efectividad: "+0 )
      }else{
        var efec = ((limpias)/(inning))*9;
        var dec = efec.toFixed(3);
        $( "#mostrar2" ).append("Efectividad: "+dec )
      }
    });

    $("#inning").change(function() {
      var limpias = document.getElementById('limpias').value;
      var inning = document.getElementById('inning').value;
      $( "#mostrar2" ).empty();
      if(inning==0||limpias==0){
        $( "#mostrar2" ).append("Efectividad: "+0 )
      }else{
        var efec = ((limpias)/(inning))*9;
        var dec = efec.toFixed(3);
        $( "#mostrar2" ).append("Efectividad: "+dec )
      }
    });

    $('#editar').click(function() {
      var hits = $('input[id=hits]').val();
      var turnos = $('input[id=turnos]').val();
      var limpias = $('input[id=limpias]').val();
      var inning = $('input[id=inning]').val();
      var id = $('input[name=id]').val();

      $.ajax({
        type: "post",
        url: "../../Jugador/actualizar",
        data: {hits: hits, turnos: turnos, limpias: limpias, inning: inning, id: id},
        success: function(response) {
          alert(response);
        }
      });

      console.log(hits+turnos+limpias+inning+id);
    });
});
