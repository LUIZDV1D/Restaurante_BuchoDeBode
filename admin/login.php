<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<script src="js/wow.min.js"></script>
              	<script>
              		new WOW().init();
              	</script>
		<title>LOGIN</title>
		<style type="text/css">
			* {margin: 0 auto; padding: 0;}

body {
	font-family: arial;
	background-color: #FF4500;
}

.container {
	display: flex;
	flex:1;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	flex-wrap: nowrap;
	height: 100%;
}

.form-control {
	border: 0px solid black;
	padding: 50px 90px;
	border-radius: 5px;
}

.form-group {
	position: relative;
}

.estilo-input {
	transition: 0.5s;
	filter: brightness(0.8);
	border: 0px solid gray;
	border-radius: 5px;
	width: 60%;
	height: 35px;
}

.estilo-input:focus {
	transition: 0.5s;
	filter: brightness(1);
	border: 0.1px solid gray;
	border-radius: 5px;
	width: 100%;
	height: 35px;
}


.botao-success {
	position: absolute;
	transition: 0.08s;
	background-color: white;
	color: #32CD32;
	border-radius: 5px;
	padding: 10px 20px;
	border: 2px solid #32CD32;
	margin-left: 15%;	
}

.botao-success:hover {
	position: absolute;
	transition: 0.08s;
	background-color: #32CD32;
	color: white;
	border-radius: 5px;
	padding: 10px 20px;
	border: 2px solid #32CD32;
	margin-left: 15%;
	cursor: pointer;	
}


.botao-warning {
	position: absolute;
	background-color: white;
	color: #FF8C00;
	border-radius: 5px;
	padding: 10px 20px;
	border: 2px solid #FF8C00;
	margin-left: 15%;	
}

.botao-warning:hover {
	position: absolute;
	transition: 0.09s;
	background-color: #FF8C00;
	color: white;
	border-radius: 5px;
	padding: 10px 20px;
	border: 0px solid black;
	cursor: pointer;
	box-shadow: 2px 2px #888888;	
}

.botao-danger {
	position: absolute;
	background-color: white;
	color: #FF0000;
	border-radius: 5px;
	padding: 10px 20px;
	border: 2px solid #FF0000;
	margin-left: 15%;	
}

.botao-danger:hover {
	position: absolute;
	transition: 0.09s;
	background-color: #FF0000;
	color: white;
	border-radius: 5px;
	padding: 10px 20px;
	border: 2px solid #FF0000;
	cursor: pointer;		
}

.botao-info {
	position: absolute;
	background-color: #6495ED;
	color: white;
	border-radius: 5px;
	padding: 10px 20px;
	border: 0px solid black;
	margin-left: 15%;	
}

.botao-info:hover {
	position: absolute;
	transition: 0.09s;
	background-color: #6495ED;
	color: white;
	border-radius: 5px;
	padding: 10px 20px;
	border: 0px solid black;
	cursor: pointer;
	box-shadow: 2px 2px #888888;	
}

.botao-default {
	position: absolute;
	background-color: #0000FF;
	color: white;
	border-radius: 5px;
	padding: 10px 20px;
	border: 0px solid black;	
	margin-left: 15%;
}

.botao-default:hover {
	position: absolute;
	transition: 0.09s;
	background-color: #0000FF;
	color: white;
	border-radius: 5px;
	padding: 10px 20px;
	border: 0px solid black;
	cursor: pointer;
	box-shadow: 2px 2px #888888;	
}


		</style>
	</head>
	<body>
		<div class="container">
			<div class="wow fadeInUp" data-wow-delay=".2s" style="padding: 15px 0px;" class="form-group">
				<h2>ÁREA DE ADMINISTRAÇÃO</h2>
			</div>
			<div>
				<form  method="post">
					<div style="background-color: white;" class="wow bounceIn form-control">
						<div class="form-group">
							<labeU>USUÁRIO:</label>
							<br><br>
							<input name="user" class="estilo-input" type="text" placeholder="Usuário">
						</div>	
						<br>
						<div class="form-group">
							<label class="text-center">SENHA:</label>
							<br><br>
							<input name="senha" class="estilo-input" type="password" placeholder="Senha">
						</div>	
						<br>
						<div class="form-group">
							<button style="width: 70%;" class="botao-success" type="submit">ENTRAR</button>	
						</div>			
					</div>
				</form>

				<?php

				if(isset($_POST['user']) && isset($_POST['senha'])){

					session_start();


					require('UsuarioDAO.php');

					$ud = new UsuarioDAO();
					$us = new Usuario();

					$us->setUsuario($_POST['user']);
					$us->setSenha($_POST['senha']);

					$_SESSION['Administrador'] = "ADMINISTRAÇÃO";

					$ud->Logar($us);
				}
					

				?>

			</div>		
		</div>	
	</body>
</html>
