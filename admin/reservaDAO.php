<?php
    include_once('Conexao.php');
    
    class reservaDAO {
        public function ListarMesas() {
            $con = new Conexao();
    
            $stmt = $con->Con();
    
            $sql = $stmt->prepare("SELECT * FROM mesas");
            $sql->execute();
    
            return $sql->fetchAll();
        }

        public function AtualizarM() {
            $co = new Conexao();
    
            $query = $co->Con();
    
            $preparar = $query->prepare("UPDATE mesas SET nome_reservista = ?, data = ?,
            status = ?");
    
            $nr = "";
            $dt = "";
            $st = "naoreservada";
    
            $preparar->bindParam(1,$nr);
            $preparar->bindParam(2,$dt);
            $preparar->bindParam(3,$st);
            
            $preparar->execute();
    
            if($preparar->rowCount() > 0) {
                echo "<script>alert('Reservas excluídas!!'); 
                location.href = 'admin.php';
                </script>";
            } else {
                echo "<script>alert('Não excluídas');
                location.href = 'admin.php';
                </script>";
            }
        }
    }

?>