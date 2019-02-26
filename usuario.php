<?php  

class Usuario {
		private $nome;
		private $idade;
		private $mesa;


		public function getNome() {
			return $this->nome;
		}

		public function setNome($nome) {
			$this->nome = $nome;
			return $this;
		}


		public function getIdade() {
			return $this->idade;
		}

		public function setIdade($idade) {
			$this->idade = $idade;
			return $this;
		}


		public function getMesa() {
			return $this->mesa;
		}

		public function setMesa($mesa) {
			$this->mesa = $mesa;
			return $this;
		}
	}

?>