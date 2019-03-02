<?php  
	include_once 'Conexao.php';
	include_once 'usuario.php';

	class UsuarioDAO {

		public function InserirUsuario(Usuario $usuario) {
			$con = new Conexao();

			$stmt = $con->Con();

			$sql = $stmt->prepare("INSERT INTO reservas (nome, idade, mesa) VALUES (?,?,?)");

			$nome = $usuario->getNome();
			$email = $usuario->getIdade();
			$senha = $usuario->getMesa();

			$sql->bindParam(1, $nome);
			$sql->bindParam(2, $idade);
			$sql->bindParam(3, $mesa);

			if ($sql->execute()) {
				echo "
				<script>
					alert('Cadastrado com sucesso, você será mandado para index');
					location.href = 'index.php';
				</script>
				";

			}
		}

		public function ReservaEspaco($n, $d) {
			$con = new Conexao();

			$stmt = $con->Con();

			$sql = $stmt->prepare("UPDATE mesas SET nome_reservista = ?, data = ?, status = ?");

			$da = $d;
			$no = $n;
			$s = "reservada";

			$sql->bindParam(1, $no);
			$sql->bindParam(2, $da);
			$sql->bindParam(3, $s);

			$sql->execute();

			if ($sql->rowCount() > 0) {
				echo "
				<script>
					alert('Cadastrado com sucesso!! Você será mandado para a tela principal.');
					location.href = 'index.php';
				</script>
				";
			}
		}

		public function ReservaMesa($n, $d, $i) {
			$con = new Conexao();

			$stmt = $con->Con();

			$sql = $stmt->prepare("UPDATE mesas SET nome_reservista = ?, data = ?, status = ? WHERE id = ?");

			$da = $d;
			$no = $n;
			$s = "reservada";
			$ID = $i;

			$sql->bindParam(1, $no);
			$sql->bindParam(2, $da);
			$sql->bindParam(3, $s);
			$sql->bindParam(4, $ID);

			$sql->execute();

			if ($sql->rowCount() > 0) {
				echo "
				<script>
					alert('Cadastrado com sucesso!! Você será mandado para a tela principal.');
					location.href = 'index.php';
				</script>
				";
			}
		}
	}
?>