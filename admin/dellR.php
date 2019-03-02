<?php

include_once('reservaDAO.php');

if (isset($_GET['id'])) {

	$reDAO = new reservaDAO();

	$reDAO->AtualizarME($_GET['id']);
}


?>