<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<?php 

	include_once 'usuárioDAO.php';
	include_once 'usuario.php';
	include_once 'Conexao.php';

 ?>
	<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF40;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #44a049;
}

div.p {
  border-radius: 4px;
  padding: 20px;
}


#mesa1:hover {
	transform: scale(1.15);
	background: green;
}

#mesa2:hover {
	transform: scale(1.15);
	background: green;
}

#mesa3:hover {
	transform: scale(1.15);
	background: green;
}

#mesa4:hover {
	transform: scale(1.15);
	background: green;
}

#mesa5over {
	transform: scale(1.15);
	background: green;
}

#mesa6:hover {
	transform: scale(1.15);
	background: green;
}

#mesa7:hover {
	transform: scale(1.15);
	background: green;
}
#mesa8:hover {
	transform: scale(1.15);
	background: green;
}
#mesa9:hover {
	transform: scale(1.15);
	background: green;
}
#mesa10:hover {
	transform: scale(1.15);
	background: green;
}
#mesa11:hover {
	transform: scale(1.15);
	background: green;
}
#mesa12:hover {
	transform: scale(1.15);
	background: green;
}
#mesa13:hover {
	transform: scale(1.15);
	background: green;
}
#mesa14:hover {
	transform: scale(1.15);
	background: green;
}
#mesa15:hover {
	transform: scale(1.15);
	background: green;

}
#mesa16:hover {
	transform: scale(1.15);
	background: green;
}
#mesa17:hover {
	transform: scale(1.15);
	background: green;
}
#mesa18:hover {
	transform: scale(1.15);
	background: green;
}
#mesa19:hover {
	transform: scale(1.15);
	background: green;
}
#mesa20:hover {
	transform: scale(1.15);
	background: green;
}
#mesa21:hover {
	transform: scale(1.15);
	background: green;
}
#mesa22:hover {
	transform: scale(1.15);
	background: green;
}
#mesa23:hover {
	transform: scale(1.15);	
	background: green;
}
#mesa24:hover {
	transform: scale(1.15);
	background: green;
}
#mesa25:hover {
	transform: scale(1.15);
	background: green;
}
#mesa26:hover {
	transform: scale(1.15);
	background: green;
}
#mesa27:hover {
	transform: scale(1.15);
	background: green;
}
#mesa28:hover {
	transform: scale(1.15);
	background: green;
}
#mesa29:hover {
	transform: scale(1.15);
	background: green;
}
#mesa30:hover {
	transform: scale(1.15);
	background: green;
}
#mesa31:hover {
	transform: scale(1.15);
	background: green;
}
#mesa32:hover {
	transform: scale(1.15);
	background: green;
}
#mesa33:hover {
	transform: scale(1.15);
	background: green;
}
#mesa34:hover {
	transform: scale(1.15);
	background: green;
}
#mesa34:hover {
	transform: scale(1.15);
	background: green;
}
#mesa36:hover {
	transform: scale(1.15);
	background: green;
}
#mesa37:hover {
	transform: scale(1.15);
	background: green;
}
#mesa38:hover {
	transform: scale(1.15);
	background: green;
}

</style>

<div style="position: relative; margin-top: 42%;">
	<div class="p">
	<form method="get">
		<label for="fname">Nome completo:</label>
		<input type="text" id="fname" name="name" placeholder="Seu nome...">

		<label for="lname">Ano de nascimento:</label>
		<select>
			<option value="mesa1">2001</option>
			<option value="mesa2">2000</option>
			<option value="mesa3">1999</option>
			<option value="mesa4">1998</option>
			<option value="mesa4">1997</option>
			<option value="mesa4">1996</option>
			<option value="mesa4">1995</option>
			<option value="mesa4">1994</option>
			<option value="mesa4">1993</option>
			<option value="mesa4">1992</option>
			<option value="mesa4">1991</option>
			<option value="mesa4">1990</option>
			<option value="mesa4">1989</option>
			<option value="mesa4">1989</option>
			<option value="mesa4">1988</option>
			<option value="mesa4">1987</option>
			<option value="mesa4">1986</option>
			<option value="mesa4">1985</option>
			<option value="mesa4">1984</option>
			<option value="mesa4">1983</option>
			<option value="mesa4">1982</option>
			<option value="mesa4">1981</option>
			<option value="mesa4">1980</option>
			<option value="mesa4">1979</option>
			<option value="mesa4">1978</option>
			<option value="mesa4">1977</option>
			<option value="mesa4">1976</option>
			<option value="mesa4">1975</option>
			<option value="mesa4">1974</option>
			<option value="mesa4">1973</option>
			<option value="mesa4">1972</option>
			<option value="mesa4">1971</option>
			<option value="mesa4">1970</option>
			<option value="mesa4">1969</option>
			<option value="mesa4">1968</option>
			<option value="mesa4">1967</option>
			<option value="mesa4">1966</option>
			<option value="mesa4">1965</option>
			<option value="mesa4">1964</option>
			<option value="mesa4">1963</option>
			<option value="mesa4">1962</option>
			<option value="mesa4">1961</option>
			<option value="mesa4">1960</option>
		</select> 
		
		<label for="lname">Mesas:</label>
		<select>
			<option value="mesa1">Mesa 1</option>
			<option value="mesa2">Mesa 2</option>
			<option value="mesa3">Mesa 3</option>
			<option value="mesa4">Mesa 4</option>
			<option value="mesa4">Mesa 5</option>
			<option value="mesa4">Mesa 6</option>
			<option value="mesa4">Mesa 7</option>
			<option value="mesa4">Mesa 8</option>
			<option value="mesa4">Mesa 9</option>
			<option value="mesa4">Mesa 10</option>
			<option value="mesa4">Mesa 11</option>
			<option value="mesa4">Mesa 12</option>
			<option value="mesa4">Mesa 13</option>
			<option value="mesa4">Mesa 14</option>
			<option value="mesa4">Mesa 15</option>
			<option value="mesa4">Mesa 16</option>
			<option value="mesa4">Mesa 17</option>
			<option value="mesa4">Mesa 18</option>
			<option value="mesa4">Mesa 19</option>
			<option value="mesa4">Mesa 20</option>
			<option value="mesa4">Mesa 21</option>
			<option value="mesa4">Mesa 22</option>
			<option value="mesa4">Mesa 23</option>
		</select>
		<label for="fdata">Data:</label>
		<input type="text" id="fdata" name="dataR" placeholder="DD/MM/YYYY">
		<input type="submit" value="Enviar" name="Enviar">    
		<center>
			<a href="?name=&dataR=" style="background: orange;">AGENDAR ESPAÇO PARA SUA FESTA</a>
		</center>
	</form>
	</div>
	<h2><center>MAPA DAS MESAS:</center></h2><br>

	<center style="border: 1px solid black;"><h3>Lado Palco</h3>
		
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa1">1
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa2">2
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa3">3
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa4">4
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa5">5
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa6">6
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa7">7 
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa8">8 
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa9">9 
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa10">10 
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa11">11
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa12">12 
		<img src="mesa.png" style="width: 4%; border: 1px solid black;" id="mesa13">13
	</center>
</div>
<?php  
			
	if (isset($_POST['name']) && isset($_POST['dataR'])) {
		$us = new UsuarioDAO();

		$nameR = $_POST['name'];
		$dataDeR = $_POST['dataR'];
 
		$us->ReservaEspaco($nameR, $dataDeR);
	}


?>


<script>
    $(document).ready(function () { 
        var $seuCampoData = $("#fdata");
		$seuCampoData.mask('00/00/0000', {reverse: false});
    });
</script> 