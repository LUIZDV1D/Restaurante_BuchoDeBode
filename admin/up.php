<?php

include_once 'CardapioDAO.php';
include_once 'Cardapio.php';

$id = $_GET['id'];
$no = $_GET['nome'];
$pre = $_GET['preco'];
$des = $_GET['descricao'];
$I = $_GET['imagens'];


if (isset($_GET['o'])) {
	if ($_GET['o'] == 'voltar') {
		header('location:index.php');
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Atualizar Prato</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animacaoCardapio.css">
</head>
<body>

<div class="fle">
	<div style="height: 100vh; background-color: tomato;">
		<center>
			<h2>Cadastrar comida</h2>

			<form method="post" enctype="multipart/form-data">

                <div style="margin-top: 5%;">
					<span>ID:</span>
					<br>
					<input class="Namecomida" value="<?php echo $id;?>" type="text" name="id" readonly>
				</div>

				<div style="margin-top: 5%;">
					<span>Nome da comida:</span>
					<br>
					<input class="Namecomida" value="<?php echo $no;?>" type="text" name="ncomida">
				</div>
				<div style="margin-top: 3%;">
					<span>Preço da comida:</span>
					<br>
					<input class="preco" type="number" value="<?php echo $pre;?>" step="0.01" name="preco">
				</div>
				<div style="margin-top: 3%;">
					<span>Descrição:</span>
					<br>
					<textarea class="descri" name="desc" style="width: 23%; max-width: 23%; max-height: 25vh; min-height: 25vh; min-width: 23%;"><?php echo $des;?></textarea>
				</div>
				<br>
				<button style="cursor: pointer;" type="submit">Atualizar</button>
			</form> 
				<br>
				<a href="?o=voltar"><button style="cursor: pointer;" type="button">Voltar</button></a>
		</center>
	</div>
</div>

<?php

$car = new Cardapio();
$caDAO = new CardapioDAO();

if (isset($_POST['ncomida']) && isset($_POST['preco']) && isset($_POST['desc']) && isset($_POST['id'])) {

    $idE = $_POST['id'];
    $nomeP = $_POST['ncomida'];
    $precoP = $_POST['preco'];
    $descP = $_POST['desc'];

    $caDAO->AtualizarC($idE,$nomeP,$precoP,$descP);

}

?>

</body>
</html>