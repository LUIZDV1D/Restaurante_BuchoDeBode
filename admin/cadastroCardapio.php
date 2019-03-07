<?php

include_once 'CardapioDAO.php';
include_once 'Cardapio.php';

if (isset($_GET['o'])) {
	if ($_GET['o'] == 'voltar') {
		header('location:admin.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Cardápio</title>
	<link rel="stylesheet" type="text/css" href="css/animacaoCardapio.css">
</head>
<body>

<div class="fle">
	<div class="Imagem" style="height: 100vh; background-color: tomato;">
		<center>
			<h2>Cadastrar comida</h2>

			<form method="post" enctype="multipart/form-data">
				<div" style="s">					
					<br>
					 <input class="Namecomida" type="text" name="ncomida" placeholder="Nome da Comida">
				</div>
				<div style="margin-top: -43%; margin-left: 35%;">
					<br><br><br><br>	
					<input class="Namecomida" type="number" step="0.01" name="preco" placeholder="Preço da Comida (R$)">
				</div>
				<div style="margin-top: 1%; margin-left: 35%;">
					
				
					<textarea class="descri" name="desc" placeholder="Descreva" style= "width: 45%; max-width: 45%; max-height: 25vh; min-height: 25vh; min-width: 23%;"></textarea>
				</div>

				<div style="margin-top:;
				margin-left: 35%;">
					<span>IMAGEM:</span>
					<br>
					<input class="button" required type="file" name="img">
				</div>
				<br>
				<button style="cursor: pointer;" class="Cadastro" type="submit">CADASTRAR</button>
			</form> 
				<br>
				<a href="?o=voltar"><button style="cursor: pointer;" class="voltar"  type="button">VOLTAR</button></a>
		</center>
	</div>
</div>

<?php

$car = new Cardapio();
$carDao = new CardapioDAO();

if (isset($_POST['desc']) && isset($_POST['ncomida'])) {
	if (isset($_FILES['img'])) {

		$dir = "img/";

		$extensao = substr($_FILES['img']['name'], -4);
		$novo_nome = md5(microtime()).$extensao;
		move_uploaded_file($_FILES['img']['tmp_name'], $dir.$novo_nome);
		
		$nomeco = $_POST['ncomida'];
		$pre = $_POST['preco'];
		$descri = $_POST['desc'];

		$car->setNomeCo($nomeco);
		$car->setPrecoC($pre);
		$car->setDes($descri);
		$car->setImage($novo_nome);

		$carDao->Cadastro($car);
	}
}

?>

</body>
</html>