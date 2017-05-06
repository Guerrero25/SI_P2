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

    $("#division").change(function() {
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

    $('#guardar').click(function() {
      var local = document.getElementById('equipoL').value;
      var visita = document.getElementById('equipoV').value;
      var mlocal = document.getElementById('mlocal').value;
      var mvisita = document.getElementById('mvisita').value;
      var fecha = $('input[name=fecha]').val();

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

    });
});
