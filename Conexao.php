<?php

		class Conexao {
			public function Con() {
				try{
						$pdo = new PDO("mysql: host=localhost; dbname=bucho_de_bode", "root", "");
				}catch(PDOException $e) {
						echo "ERROR: ".$e->getMessage();
				}
				return $pdo;
			}
		}

?>