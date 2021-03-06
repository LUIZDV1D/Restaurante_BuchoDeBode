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
                location.href = 'index.php';
                </script>";
            } else {
                echo "<script>alert('Não excluídas');
                location.href = 'index.php';
                </script>";
            }
        }

        public function AtualizarME($i) {
            $co = new Conexao();
    
            $query = $co->Con();
    
            $preparar = $query->prepare("UPDATE mesas SET nome_reservista = ?, data = ?,
            status = ? WHERE id = ?");
    
            $nr = "";
            $dt = "";
            $st = "naoreservada";
            $ID = $i;
    
            $preparar->bindParam(1,$nr);
            $preparar->bindParam(2,$dt);
            $preparar->bindParam(3,$st);
            $preparar->bindParam(4,$ID);
            
            $preparar->execute();
    
            if($preparar->rowCount() > 0) {
                echo "<script>alert('Reserva excluída!!'); 
                location.href = 'index.php?opc=res';
                </script>";
            } else {
                echo "<script>alert('Não excluída');
                location.href = 'index.php?opc=res';
                </script>";
            }
        }
    }

?>