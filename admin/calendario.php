<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/animate.css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<script>
		  	$( function() {
		    	$( "#accordion" ).accordion();
		  	} );
		</script>

		<script src="js/wow.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script>
            new WOW().init();
        </script>

        <style type="text/css">
        	body {
        		background: url('img/fundo.jpg');
        	}
        	.titulo-accordion {
        		color: white;
        		cursor: pointer;
        		line-height: 90px;
        		border-bottom: 1px solid black;
        		text-align: center;
        	}

        	.back-content-accordion {
        		background: rgb(255,69,0);
        		color: black;
        	}

        	.titulo {
        		justify-content: center;
        		text-align: center;
        		font-size: 40px;
        		border-bottom: 2px solid black;
        		margin: 20px 30%;
        	}
        </style>
 
</head>
<body>

<div class="titulo">
	<legend style="color: black;">Eventos Semanais <i class="fa fa-calendar-alt"></i></legend>
</div>

<div id="accordion" >
  <h3 class="titulo-accordion">Xote da segunda</h3>
  <div class="back-content-accordion">
  	<table>
  		<tr>
  			<td><p>Mauris mauris ante, blandit et.</p></td>
  			<td><img src="PlayStation_2_logo.svg.png" style="width: 200px"></td>
  		</tr>
  	</table>
  </div>

  <h3 class="titulo-accordion">Quarta da pamonha</h3>
  <div class="back-content-accordion">
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3 class="titulo-accordion">Sexta da tapioca</h3>
  <div class="back-content-accordion">
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  

</body>
</html>