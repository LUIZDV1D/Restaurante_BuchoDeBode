<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bucho de Bode</title>
    <link rel="stylesheet" href="css/flexBox.css">
    <link rel="stylesheet" href="css/styleI.css">
</head>
<body>
    
<header id="main-header">
<div class="container">

<div class="row center-xs middle-xs">
           
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
          
           
<img class="logo" src="images/logo.png">
            
 </div>
<div class="col-xs-12 col-lg-10">
<nav id="navbar">
<ul>
<li><a href="index.php">Menu</a></li>
<li><a href="?opic=cardap">Cardápu</a></li>
<li><a href="#">Quem Somos</a></li>
<li><a href="?opic=rese">Reservas</a></li>
</ul>
</nav>

</div>
</div>
        
</div>
<section>
<img class="foto" src="images/1.jpg">

<img class="foto" src="images/1.jpg" >
<img class="foto" src="images/2.jpg" >


<img class="foto" src="images/3.jpg"></li>


</div>
</section>
</header>

    


<section id="showcase">

      


    <br>  
    <?php
      if (isset($_GET['opic'])) {
        if ($_GET['opic'] == 'cardap') {
          include 'Cardapio.php';
        }

        if ($_GET['opic'] == 'rese') {
          include 'reserva.php';
        }
      }else{
          echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
        }
    ?>
</section>




   
<section id="features">
<div class="container">
<div class="row center-xs">
<div class="col-xs-12 ">
<h2>Localidades</h2>
            
           
            <div class="row center-xs">
              <div class="col-xs-12">
                <i class="fa fa-dashboard"></i><br>
                <h4>São Miguel/RN</h4>
                <p>Rua Ademar Libertato Nº 49</p>
              </div>
              <div class="col-xs-12 col-lg-4">
                <i class="fa fa-question-circle-o"></i><br>
                <h4>Natal/RN</h4>
                <p>Rua Presidente Passos Nº 202</p>
              </div>
              <div class="col-xs-12 col-lg-4">
                <i class="fa fa-rocket"></i><br>
                <h4>Pereiro/CE</h4>
                <p>Rua São Vicente de Paula Nº 29</p>
              </div>
            </div>

           
            <div class="row center-xs">
              <div class="col-xs-12 col-lg-4">
                <i class="fa fa-line-chart"></i><br>
                <h4>Parnamirim/RN</h4>
                <p>Rua Projetada Nº 85</p>
              </div>
              <div class="col-xs-12  col-lg-4">
                <i class="fa fa-users"></i><br>
                <h4>Macau</h4>
                <p>Rua Vereador Luis Chico Nº 508</p>
              </div>
              <div class="col-xs-12 col-lg-4">
                <i class="fa fa-plug"></i><br>
                <h4>Tibau</h4>
                <p>Praia de Canoa Quebrada</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


 
  

    <section id="company">
      <div class="container">
        <div class="row">
          <div class="col-xs-12  col-lg-4">
            <h4>Contatos (Central)</h4>
            <ul>
              <li><i class="fa fa-phone"></i> (84) 555-5555</li>
              <li><i class="fa fa-envelope"></i> ajuda.360@gmail.com</li>
              <li><i class="fa fa-map"></i> Rua Álvaro Junior, 400</li>
            </ul>
          </div>
          <div class="col-xs-12 col-lg-4">
            <h4>Sobre nós</h4>
            <p>Para mais informações sobre a empresa, acesse "Sobre Nós"</p>
          </div>
          <div class="col-xs-12 col-lg-4">
            <h4>Quer receber notícias?</h4>
            <p>Nos envie seu email e fique atualizado! </p>
            <form>
              <input type="text" name="email" placeholder="Escreva seu Email">
              <button type="submit" name="button">Enviar</button>
            </form>
          </div>
        </div>
      </div>
    </section>

     

  </body>
</html>
