<?php

include_once 'CardapioDAO.php';
include_once 'Cardapio.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Cardápio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="fle">
	<div style="height: 100vh; background-color: tomato;">
		<center>
			<h2>Cadastrar comida</h2>

			<form method="post">
				<div style="margin-top: 5%;">
					<span>Nome da comida:</span>
					<br>
					<input type="text" name="ncomida">
				</div>
				<div style="margin-top: 3%;">
					<span>Preço da comida:</span>
					<br>
					<input type="number" step="0.01" name="preco">
				</div>
				<div style="margin-top: 3%;">
					<span>Descrição:</span>
					<br>
					<textarea name="desc" style="width: 23%; max-width: 23%; max-height: 25vh; min-height: 25vh; min-width: 23%;"></textarea>
				</div>

				<div style="margin-top: 3%;">
					<span>Imagem:</span>
					<br>
					<input required type="file" name="img">
				</div>
				<br>
				<button style="cursor: pointer;" type="submit">Cadastrar</button>
			</form> 
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