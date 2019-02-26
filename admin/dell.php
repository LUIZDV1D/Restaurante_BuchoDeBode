<?php

    include_once('CardapioDAO.php');

    $caDAO = new CardapioDAO();

    $idE = $_GET['id'];

    $caDAO->ExcluirC($idE);

?>