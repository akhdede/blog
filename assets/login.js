$(document).ready(function(){
	$('#submit').click(function(){
		var username = $('#username').val();
		var password = $('#password').val();

		if(username != "" && password != ""){
			$.ajax({
				url: '',
				type: 'post',
				data: {username:username,password:password},
				success: function(response){
					var msg = "";
					if(response == 1){
						window.location = "dashboard.php";
					}
					else{
						msg = "Username atau Password Salah!";
					}
					$("#message").html(msg);
				}
			});
		}
	});
});