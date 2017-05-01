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
});
