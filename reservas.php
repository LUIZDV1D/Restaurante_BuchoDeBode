<!DOCTYPE html>
<html>
<head>
	<title>Reservas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>
<style type="text/css">
	
</style>
<body style="background-image: url('fundo.jpg'); background-repeat: no-repeat; background-attachment: fixed;">
	<center>
	<form action="/pagina-processa-dados-do-form" method="post">
    <div>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" />
    </div><br>
    <div>
        <label for="email">Tipo de reserva:</label><br>
        <input type="email" id="tipo" />
    </div><br>
    <div>
        <label for="email">Data atual:</label><br>
        <input type="text" id="data" />
    </div><br>
    <div>
        <label for="email">Data da reserva:</label><br>
        <input type="email" id="email" />
    </div><br>
</form>
<table border="2">	
	<tr>
		<td>Mesa 1<input type="checkbox" name="c1[]" value="1"></td>
		<td>Mesa 2<input type="checkbox" name="c1[]" value="2"></td>
		<td>Mesa 3<input type="checkbox" name="c1[]" value="3"></td>
		<td>Mesa 4<input type="checkbox" name="c1[]" value="4"></td>
		<td>Mesa 5<input type="checkbox" name="c1[]" value="5"></td>
		<td>Mesa 6<input type="checkbox" name="c1[]" value="6"></td>
	</tr>
	<tr>
		<td>Mesa 7<input type="checkbox" name="c1[]" value="7"></td>
		<td>Mesa 8<input type="checkbox" name="c1[]" value="8"></td>
		<td>Mesa 9<input type="checkbox" name="c1[]" value="9"></td>
		<td>Mesa 10<input type="checkbox" name="c1[]" value="10"></td>
		<td>Mesa 11<input type="checkbox" name="c1[]" value="11"></td>
		<td>Mesa 12<input type="checkbox" name="c1[]" value="12"></td>
	</tr>
	<tr>
		<td>Mesa 13<input type="checkbox" name="c1[]"></td>
		<td>Mesa 14<input type="checkbox" name="c1[]"></td>
		<td>Mesa 15<input type="checkbox" name="c1[]"></td>
		<td>Mesa 16<input type="checkbox" name="c1[]"></td>
		<td>Mesa 17<input type="checkbox" name="c1[]"></td>
		<td>Mesa 18<input type="checkbox" name="c1[]"></td>
	</tr>
	<tr>
		<td>Mesa 19<input type="checkbox" name="c1[]"></td>
		<td>Mesa 20<input type="checkbox" name="c1[]"></td>
		<td>Mesa 21<input type="checkbox" name="c1[]"></td>
		<td>Mesa 22<input type="checkbox" name="c1[]"></td>
		<td>Mesa 23<input type="checkbox" name="c1[]"></td>
		<td>Mesa 24<input type="checkbox" name="c1[]"></td>
	</tr>
	
</table><BR></BR>
<input type="submit" name="AGENDAR" value="enviar" class="fa fa-calendar-plus"></i><br>
</center>

</body>
</html>
<?php  
include "conexao.php";

if(isset($_POST["c1"])) {
	for($i = 0; $i < count($_POST["c1"]); $i++) {

echo "A mesa ".$_POST["c1"][$i]." foi selecionada!<br/>";
}

} else {

echo "Nenhuma mesa foi selecionada!";

}


?>