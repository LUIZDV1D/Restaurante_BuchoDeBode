<?php 

	include_once("Conexao.php"); 

	$con = new Conexao();

	$stmt = $con->Con();

	$sql = $stmt->prepare("SELECT * FROM cardapio WHERE id = ?");

	$ID = $_GET['id'];

	$sql->bindParam(1, $ID);

	$sql->execute();

	$prato = $sql->fetch();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Prato: <?php echo $prato['nome_comida']?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styleQ.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="shortcut icon" type="x-icon" href="admin/img/<?php echo $prato['image']?>">
	<script type="text/javascript" src="js/wow.js"></script>

	<style type="text/css">
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
	</style>

</head>
<body style="background-color: tomato;">
	<div class="cont">
		<div style="background-color: tomato;">

		</div>
		<div>

			<?php
	                echo '
	                <center>
						<h2 style="font-family: arial; color: white;">'.$prato["nome_comida"].'</h2>
					</center>
	                <img height="300" class="img-1" src="admin/img/'.$prato["image"].'">
					<p style="color: white; width: 50%; float: right; margin-top: 12%; margin-right: 5%; max-height: 10%; border: 1px solid black; border-radius: 5px;">'.$prato["descricao"].'<br><br>R$ '.$prato["preco_comida"].'</p>';

       		?>
       		<a href="Cardapio2.php" style="position: absolute; margin-top: 20%; margin-left: 34%;"><button class="botao-danger" type="button">Voltar</button></a>
			<div style="grid-template-columns: 10px;"></div>

		</div>
	</div>
	<br>
</body>
</html>