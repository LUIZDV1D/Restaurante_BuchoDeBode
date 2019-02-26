<?php 

	session_start();

	if ($_SESSION['Administrador'] == "") {
		header("location:index.php");
	} else {
		if (isset($_GET['sair'])) {
			if ($_GET['sair'] == "s") {
				session_destroy();
				header('location:index.php');
			}
	}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['Administrador'];?></title>
	<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/animate.css">
		<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>-->
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/wow.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
		<script>
            new WOW().init();
        </script>

        <style type="text/css">

			ul {
			  list-style-type: none;
			  margin: 0;
			  padding: 0;
			  overflow: hidden;
			}

			li a {
			  display: block;
			  color: white;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			}

			li a:hover {
			  background-color: #111;
			}

			#home {
				background-color: #B22222;
			}

			#me {
				display: block;
				background-color: #333;
				position: fixed;
				width: 20%;
				height: 100%;
			}

			.menuzinho {
				display: none;
			}
			
			#me {
				display: none;
			}

			.menuzinho {
				display: block;
				background: #333;
				width: 5%;
				height: 9vh;
				float: left;
				border-radius: 5px;
			}

			#icon-close-menu {
				display: block;
			}

        </style>
</head>
<body>
	<div id="me">
		<ul>
			<li id="icon-close-menu"><i style="font-size: 25px; padding: 10px 10px; cursor: pointer; color: #B22222;" class="fa fa-bars"></i></li>
			<li><h3 style="text-align: center; color: white; padding: 5px 10px;"><?php echo $_SESSION['Administrador'];?></h3><h4 style="text-align: center; color: white; padding: 5px 10px 30px;"><a href="?sair=s">Sair</a></h4></li>
			<li id="home"><a href="admin.php">Home</a></li>
			<li><a href="?opc=res">Reservas</a></li>
			<li><a href="?opc=carda">Cadastrar Pratos</a></li>
			<li><a href="?opc=lpratos">Lista de Pratos</a></li>
			<li><a href="?opc=at">Atrações</a></li>
		</ul>
	</div>
	<div class="menuzinho">
		<center>
			<i class="fa fa-bars" id="icon-open-menu" style="cursor: pointer; font-size: 35px; color: #B22222; margin-top: 10px;"></i>
		</center>
	</div>

	<div>
		<?php

			if (isset($_GET['opc'])) {
				if ($_GET['opc'] == 'carda') {
					include('cadastroCardapio.php');
				}
				if ($_GET['opc'] == 'lpratos') {
					include('listaPratos.php');
				}
			}

		?>
	</div>
</body>
</html>

<script type="text/javascript">
	$("#icon-open-menu").click(function(){
        $('#me').toggle(200, function() {
                $('#me').css("display", "block")
        });
        $('#menuzinho').toggle(200, function() {
                $('#menuzinho').css("display", "none")
        });
    });



    $("#icon-close-menu").click(function(){
		$('#me').toggle(200, function() {
            $('#me').css("display", "none")
        });
        $('#menuzinho').toggle(200, function() {
            $('#menuzinho').css("display", "block")
        });
    });
</script>