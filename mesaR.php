<?php

	include_once('usuárioDAO.php');
	
	if (isset($_GET['name']) && isset($_GET['m']) && isset($_GET['dataR'])) {
		
		$u = new UsuarioDAO();

		$u->ReservaMesa($_GET['name'], $_GET['dataR'], $_GET['m']);
	} else {
		echo "
				<script>
					alert('Preencha os campos!!');
					location.href = 'index.php?opic=rese';
				</script>
				";
	}

?>