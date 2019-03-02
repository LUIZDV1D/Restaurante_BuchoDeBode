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

</style>

<div style="position: relative; margin-top: 42%;">
	<div class="p">
	<form method="get" action="espaco.php">
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
			<?php
			
				for ($i=1; $i <= 13; $i++) { 
					echo '<option value="'.$i.'">Mesa '.$i.'</option>';		
				}

			?>
		</select>
		<input type="hidden" value="agE" name="opi">
		<label for="fdata">Data:</label>
		<input type="text" id="fdata" name="dataR" placeholder="DD/MM/YYYY">    
		<?php
            $con = new Conexao();
    
            $stmt = $con->Con();
    
            $sql = $stmt->prepare("SELECT * FROM mesas");
            $sql->execute();
    
            $mesas = $sql->fetchAll();

			$btR = 0;
			for ($i=0; $i < count($mesas); $i++) { 
				if ($mesas[$i]['status'] == "reservada") {
					$btR += 1;
				}
			}
			if ($btR >= 13) {
				echo '<br><br><center><h4 style="color:white;">Espaço reservado para Evento!!</h4></center>';
			} else {
				echo '
				<input type="submit" value="Enviar" name="Enviar">
				<br><br>
				<center>
				<button style="background: orange; cursor: pointer;">AGENDAR ESPAÇO PARA SUA FESTA</button>
			</center>';
			}
		?>
	</form>
	</div>
	<h2><center>MAPA DAS MESAS:</center></h2><br>

	<center style="border: 1px solid black;"><h3>Lado do Palco</h3>

		<?php
			
			for ($i=1; $i <= 13; $i++) { 
				echo '<img src="mesa.png" style="width: 4%; border: 1px solid black;">'.$i;		
			}

		?>
	</center>
</div>

<script>

    $(document).ready(function () { 
        var $seuCampoData = $("#fdata");
		$seuCampoData.mask('00-00-0000', {reverse: false});
    });

</script> 