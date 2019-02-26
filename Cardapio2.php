<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleP.css">
</head>
<body>

<section class="container row">

        <section class="container row">
        <?php

        include_once 'admin/CardapioDAO.php';

            $CardapioDao = new CardapioDAO();

            $pratos = $CardapioDao->ListarPratos();

            for ($i=0; $i < count($pratos); $i++) { 
                echo '


    <div class="item"><h2 style="color: orange;">'.$pratos[$i]['nome_comida'].'</h2><img class="image" src="admin/img/'.$pratos[$i]['image'].'" width="300" height="300"><h3 style="color: white;max-width: 35%;display: inline;">R$'.$pratos[$i]['preco_comida'].'</h3></div>

    
';
}
    ?>
    </section>



</body>
</html>