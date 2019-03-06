
<?php
include_once ('admin/CardapioDAO.php');

$con = new Conexao();
    
            $stmt = $con->Con();
    
            $sql = $stmt->prepare("SELECT * FROM cardapio");
            $sql->execute();
    
            if ($sql->rowCount() > 0) {
              
            } else {
              echo "
              <script>

                alert('Não possuem pratos cadastrados!')
                location.href = 'index.php?opic=cardap';
              </script>";
            }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cardápio completo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleP.css">

    <style type="text/css">
        .contraste:hover {
          transition: 0.4s;
          transform: scale(1.05);
          filter: contrast(2);
        }

        .contraste {
          transition: 0.4s;
        }
    </style>
</head>
<body>

    <section class="container row">
        <?php

            $CardapioDao = new CardapioDAO();

            $pratos = $CardapioDao->ListarPratos();

            for ($i=0; $i < count($pratos); $i++) { 
                echo '<a class="item" href="detalhe-prato.php?id='.$pratos[$i]["id"].'"><div style="cursor: pointer;"><h2 style="color: orange;">'.$pratos[$i]['nome_comida'].'</h2><img class="image contraste" src="admin/img/'.$pratos[$i]['image'].'" height="300" width="300">
                <br><h3 style="color: white;max-width: 35%;display: inline;">R$'.$pratos[$i]['preco_comida'].'</h3></div></a>';
            }
        ?>
        <a href="index.php?opic=cardap" style="position: absolute; margin-top: 20%; margin-left: 34%;"><button class="botao-danger" type="button">Voltar</button></a>
    </section>
</body>
</html>