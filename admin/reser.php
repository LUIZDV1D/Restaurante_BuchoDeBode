<?php

    include_once('reservaDAO.php');

?>

<style type="text/css">
    	table, th, td {
   border: 1px solid black;
}

		table {
    border-collapse: collapse;
    background-color: white;
}

table {
    width: 80%;
}

th {
    height: 50px;
}

td {
    height: 50px;
    vertical-align: bottom;
}

th, td {
    padding: 15px;
}

th, td {
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color: #f5f5f5}

tr:nth-child(even) {background-color: #f2f2f2}

th {
    background-color: black;
    color: white;
}
    </style>

    <center>
	<table border="1">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nome Reservista</th>
	      <th scope="col">Mesa</th>
	      <th scope="col">Data</th>
          <th scope="col">Status</th>
	      <th scope="col">Ações</th>
	    </tr>
	  </thead>
	  <tbody>

	  	<?php 

			include_once 'reservaDAO.php';

			$reservaDao = new reservaDAO();

			$mesas = $reservaDao->ListarMesas();
			$btnExcluir=0;
			for ($i=0; $i < count($mesas); $i++) { 
                if($mesas[$i]['status'] == "reservada"){
					$btnExcluir += 1;
                }				
				echo "
				<tr>
	      			<td scope='row'>".$mesas[$i]['id']."</td>
	      			<td>".$mesas[$i]['nome_reservista']."</td>
	      			<td>".$mesas[$i]['mesa']."</td>
                      <td>".$mesas[$i]['data']."</td>
                      <td>".$mesas[$i]['status']."</td>
	      			<td>
						  ";
						 if ($mesas[$i]['status'] != "naoreservada") {
							 echo "<a style='color: blue; text-decoration: none;' href='dellR.php?id=".$mesas[$i]['id']."'>Alterar</a>";
						 } 
						  "
	      			</td>
	    		</tr>
	    		";
			}

	 	?>
	  </tbody>
	</table>
    <br><br>
    <?php
    if($btnExcluir >=1){
        echo '<a href="?opc=altTodas"><button type="button" style="cursor:pointer;">Excluir todas as reservas</button></a>';
    }
    ?>
    <br><br>
    </center>