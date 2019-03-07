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
	      <th scope="col">Banner</th>
	      <th scope="col">Ações</th>
	    </tr>
	  </thead>
	  <tbody>

	  	<?php 

			include_once 'CardapioDAO.php';

			$CardapioDao = new CardapioDAO();

			$ba = $CardapioDao->ListarBanners();

			for ($i=0; $i < count($ba); $i++) { 
				echo "
				<tr>
	      			<td scope='row'>".$ba[$i]['id']."</td>
	      			<td><center><img width='500' height='300' src='img/atracoes/".$ba[$i]['banner']."'></center></td>
	      			<td>
	      				<a style='color: red; text-decoration: none;' href='dellB.php?id=".$ba[$i]['id']."'>Excluir</a>
	      			</td>
	    		</tr>
	    		";
			}

	 	?>
	  </tbody>
	</table>
    </center>

 