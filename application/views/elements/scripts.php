<script type="text/javascript" src="<?= base_url()?>js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#login-btn").on('click', function(event) {
			event.preventDefault();
			let login = $("#login").val();
			let password = $("#password").val();

			let user_info = {'login': login, 'password': password};

			$.ajax({
				url: "<?= base_url()?>usuarios/login_endpoint", 
				data: user_info,
				method: 'POST',
				success: function(result) {
					console.log(result);
					if(result.login) {
						$(location).attr('href', '/productos');
					} else {
						alert("Usuario o password incorrectos");
					}
				}

			});
			/// ES6, Babel 
		  });	
		});
		

	</script>