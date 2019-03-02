<?php

	include_once('usuárioDAO.php');
	
	if (isset($_GET['name']) && isset($_GET['dataR'])) {
		
		$u = new UsuarioDAO();

		$u->ReservaEspaco($_GET['name'], $_GET['dataR']);
	} else {
		echo "
				<script>
					alert('Preencha os campos!!');
					location.href = 'index.php?opic=rese';
				</script>
				";
	}

?>