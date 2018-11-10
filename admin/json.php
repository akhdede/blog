<?php  
include '../config/init.php';
$hasil = $crud->get('users');
?>
<p id="demo"></p>
<script src="../assets/jquery/jquery.js"></script>
<script src="../assets/jquery.easing.1.3.js"></script>
<script>
	$(document).ready(function(){
		var url = "http://localhost/portfolio/admin/user.json";
		$.getJSON(url, function(json){
			$.each(json.data, function(i,dat){
				$('#demo').append(
					'<p><b>Nama : '+dat.username+'</b><br></p>'+
					'<p>Password : '+dat.password+'<br></p>'+
					'<p>Level : '+dat.level+'</p>'
				);
			});
		});
	});
</script>