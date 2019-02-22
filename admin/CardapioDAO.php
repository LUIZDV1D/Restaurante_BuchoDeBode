<?php

include_once 'Conexao.php';
include_once 'Cardapio.php';

class CardapioDAO {
	public function Cadastro(Cardapio $cardapio) {
		$co = new Conexao();

		$query = $co->Con();

		$preparar = $query->prepare("INSERT INTO cardapio (nome_comida, preco_comida, descricao, image) VALUES (?,?,?,?)");

		$name = $cardapio->getNomeCo();
		$price = $cardapio->getPrecoC();
		$d = $cardapio->getDes();
		$imagem = $cardapio->getImage();

		$preparar->bindParam(1, $name);
		$preparar->bindParam(2, $price);
		$preparar->bindParam(3, $d);
		$preparar->bindParam(4, $imagem);

		$preparar->execute();

		if ($preparar->rowCount() > 0) {
			echo "<script>alert('massa');</script>";
		} else {
			echo "<script>alert('não massa');</script>";
		}
	}

	public function ListarPratos() {
		$con = new Conexao();

		$stmt = $con->Con();

		$sql = $stmt->prepare("SELECT * FROM cardapio ORDER BY nome_comida ASC");
		$sql->execute();

		return $sql->fetchAll();
	}
}

?>