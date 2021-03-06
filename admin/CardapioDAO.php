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
			echo "<script>alert('Cadastrado!!');
			location.href = 'index.php?opc=lpratos';
			</script>";
		} else {
			echo "<script>alert('Não cadastrado');
			location.href = 'index.php?opc=lpratos';
			</script>";
		}
	}

	public function ListarPratos() {
		$con = new Conexao();

		$stmt = $con->Con();

		$sql = $stmt->prepare("SELECT * FROM cardapio ORDER BY nome_comida ASC");
		$sql->execute();

		return $sql->fetchAll();
	}

	public function ListarBanners() {
		$con = new Conexao();

		$stmt = $con->Con();

		$sql = $stmt->prepare("SELECT * FROM atracao ORDER BY id ASC");
		$sql->execute();

		return $sql->fetchAll();
	}

	public function ExcluirC($idE) {
		$co = new Conexao();

		$query = $co->Con();

		$preparar = $query->prepare("DELETE FROM cardapio WHERE id = ?");
		$id = $idE;
		$preparar->bindParam(1,$id);

		$preparar->execute();
		
		if($preparar->rowCount() > 0) {

			echo "<script>alert('Deletado!!'); 
			location.href = 'index.php?opc=lpratos';
			</script>";
		} else {
			echo "<script>alert('Não deletado');
			location.href = 'index.php?opc=lpratos';
			</script>";
		}
	}

	public function ExcluirB($idE) {
		$co = new Conexao();

		$query = $co->Con();

		$preparar = $query->prepare("DELETE FROM atracao WHERE id = ?");
		$id = $idE;
		$preparar->bindParam(1,$id);

		$preparar->execute();
		
		if($preparar->rowCount() > 0) {

			echo "<script>alert('Deletado!!'); 
			location.href = 'index.php?opc=latra';
			</script>";
		} else {
			echo "<script>alert('Não deletado');
			location.href = 'index.php?opc=latra';
			</script>";
		}
	}

	public function AtualizarC($idE,$nomeP,$precoP,$descP) {
		$co = new Conexao();

		$query = $co->Con();

		$preparar = $query->prepare("UPDATE cardapio SET nome_comida = ?, preco_comida = ?,
		descricao = ? WHERE id = ?");

		$id = $idE;
		$n = $nomeP;
		$p = $precoP;
		$d = $descP;

		$preparar->bindParam(1,$nomeP);
		$preparar->bindParam(2,$precoP);
		$preparar->bindParam(3,$descP);
		$preparar->bindParam(4,$id);
		
		$preparar->execute();

		if($preparar->rowCount() > 0) {
			echo "<script>alert('Atualizado!!'); 
			location.href = 'index.php?opc=lpratos';
			</script>";
		} else {
			echo "<script>alert('Não atualizado');
			location.href = 'index.php?opc=lpratos';
			</script>";
		}
	}

	public function CadastroBanner($nome_img) {
		$co = new Conexao();

		$query = $co->Con();

		$preparar = $query->prepare("INSERT INTO atracao (banner) VALUES (?)");

		$name = $nome_img;

		$preparar->bindParam(1, $name);

		$preparar->execute();

		if ($preparar->rowCount() > 0) {
			echo "<script>alert('Cadastrado!!');
			location.href = 'index.php?opc=latra';
			</script>";
		} else {
			echo "<script>alert('Não cadastrado');
			location.href = 'index.php';
			</script>";
		}
	}
}

?>