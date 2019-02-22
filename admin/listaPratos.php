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
	      <th scope="col">Nome</th>
	      <th scope="col">Preço</th>
	      <th scope="col">Descrição</th>
	      <th scope="col">Ações</th>
	    </tr>
	  </thead>
	  <tbody>

	  	<?php 

			include_once 'CardapioDAO.php';

			$CardapioDao = new CardapioDAO();

			$pratos = $CardapioDao->ListarPratos();

			for ($i=0; $i < count($pratos); $i++) { 
				echo "
				<tr>
	      			<td scope='row'>".$pratos[$i]['id']."</td>
	      			<td>".$pratos[$i]['nome_comida']."</td>
	      			<td>".$pratos[$i]['preco_comida']."</td>
	      			<td>".$pratos[$i]['descricao']."</td>
	      			<td>
	      				<a style='color: red; text-decoration: none;' href='dell.php?id=".$pratos[$i]['id']."'>Excluir</a>
	      				|
	      				<a style='color: blue; text-decoration: none;' href='up.php?id=".$pratos[$i]['id']."&nome=".$pratos[$i]['nome_comida']."&preco=".$pratos[$i]['preco_comida']."&descricao=".$pratos[$i]['descricao']."'>Alterar</a>
	      			</td>
	    		</tr>
	    		";
			}

	 	?>
	  </tbody>
	</table>
    </center>