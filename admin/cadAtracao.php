<?php

include_once 'CardapioDAO.php';

if (isset($_GET['o'])) {
	if ($_GET['o'] == 'voltar') {
		header('location:index.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Cardápio</title>
</head>
<body>

<div class="fle">
	<div style="height: 100vh; background-color: tomato;">
		<center>
			<h2>Cadastrar Banner de Atração</h2>
			<form method="post" enctype="multipart/form-data">
				<div style="margin-top: 3%;">
					<span>Imagem:</span>
					<br>
					<input required type="file" name="img">
				</div>
				<br>
				<button style="cursor: pointer;" type="submit">Cadastrar</button>
			</form> 
				<br><br>
				<a href="?o=voltar"><button style="cursor: pointer;" type="button">Voltar</button></a>
		</center>
	</div>
</div>

<?php

$carDao = new CardapioDAO();

	if (isset($_FILES['img'])) {

		$dir = "img/atracoes/";

		$extensao = substr($_FILES['img']['name'], -4);
		$novo_nome = md5(microtime()).$extensao;
		move_uploaded_file($_FILES['img']['tmp_name'], $dir.$novo_nome);

		$carDao->CadastroBanner($novo_nome);
	}

?>

</body>
</html>