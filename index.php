
<?php

 include_once('Conexao.php'); 

  $con = new Conexao();

  $stmt = $con->Con();

  $sql = $stmt->prepare("SELECT * FROM atracao");

  $sql->execute();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bucho de Bode</title>
    <link rel="stylesheet" href="css/flexBox.css">
    <link rel="stylesheet" href="css/styleI.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="admin/css/fontawesome.css">
    <link rel="shortcut icon" type="x-icon" href="images/logo.png">
    <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/cycle.js"></script>

  <style type="text/css">
    #imagens{
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      border-radius:5px;
    }
    
    #imagens ul{
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      list-style:none;
      width: 100%;
    }

    a[href="#top"]{
      padding:10px;
      position:fixed;
      top: 90%;
      right:40px;
      display:none;
      font-size: 30px;
      z-index: 999;
    }

    a[href="#top"]:hover{
      text-decoration:none;
    }

</style>
</head>
<body>
    
<header id="main-header">
<div class="container">

<div class="row center-xs middle-xs">
           
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
          
           
<a href="index.php"><img class="logo" src="images/logo.png"></a>
            
 </div>
<div class="col-xs-12 col-lg-10">
<nav id="navbar">
<ul>
<li><a href="index.php">Início</a></li>
<li><a href="?opic=cardap">Cardápu</a></li>
<li><a href="?opic=qsomos">Quem Somos</a></li>
<li><a href="?opic=rese">Reservas</a></li>
</ul>
</nav>

</div>
</div>

<a href="#top" class="fas fa-arrow-up" style="text-decoration: none; color: white;"></a>
        
</div>
<section>

<div id="imagens">
    <ul>
      <?php  
          $banner = $sql->fetchAll();
          
          for ($i=0; $i < count($banner); $i++) { 
            echo '<li>
            <img style="width: 100%;" src="admin/img/atracoes/'.$banner[$i]["banner"].'"/>
          </li>';
          }
      
      ?>
      </ul>

</div><!--FIM DIV IMAGENS-->
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
        if ($_GET['opic'] == 'reE') {
          include 'reservaE.php';
        }
        if ($_GET['opic'] == 'qsomos') {
          include 'quem somos.php';
        }
        if ($_GET['opic'] == 'cadT') {
           $con = new Conexao();
    
            $stmt = $con->Con();
    
            $sql = $stmt->prepare("SELECT * FROM cardapio");
            $sql->execute();
    
            if ($sql->rowCount() > 0) {
              header("location:Cardapio2.php");
            } else {
              echo "
              <script>

                alert('Não possuem pratos cadastrados!')
                location.href = 'index.php?opic=cardap';
              </script>";
            }
        }
      }else{
          echo "<br><br><br><br><br><br><br><br><br>";
        }
    ?>
</section>




   
<section id="features">
<div class="container">
<div class="row center-xs">
<div class="col-xs-12 ">
<h2>Localidades:</h2>
            
           
            <div class="row center-xs">
              <div class="col-xs-12">
                <i class=""></i><br>
                <h4>São Miguel/RN</h4>
                <p>Rua Ademar Libertato Nº 49</p>
              </div>
              <div class="col-xs-12 col-lg-4">
                <i class=""></i><br>
                <h4>Natal/RN</h4>
                <p>Rua Presidente Passos Nº 202</p>
              </div>
              <div class="col-xs-12 col-lg-4">
                <i class=""></i><br>
                <h4>Pereiro/CE</h4>
                <p>Rua São Vicente de Paula Nº 29</p>
              </div>
            </div>

           
            <div class="row center-xs">
              <div class="col-xs-12 col-lg-4">
                <i class=""></i><br>
                <h4>Parnamirim/RN</h4>
                <p>Rua Projetada Nº 85</p>
              </div>
              <div class="col-xs-12  col-lg-4">
                <i class=""></i><br>
                <h4>Macau</h4>
                <p>Rua Vereador Luis Chico Nº 508</p>
              </div>
              <div class="col-xs-12 col-lg-4">
                <i class=""></i><br>
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
              <li><i class="fa fa-phone"></i> 0800 5555-5555</li>
              <li><i class="fa fa-envelope"></i> ajuda.360@gmail.com</li>
              <li><i class="fa fa-map"></i> Rua Álvaro Junior, 400</li>
            </ul>
          </div>
          <div class="col-xs-12 col-lg-4">
            <h4>Sobre nós</h4>
            <p>Para mais informações sobre a empresa, acesse "Quem Somos"</p>
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

     <script type="text/javascript">
  $(function(){
    $('#imagens ul').cycle({
      fx: 'fade',
      speed: 2000,
      timeout: 3000,
      next: '#prox',
      prev: '#ant',
      pager: '#pager'
    })
  });

  $(document).ready(function(){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('a[href="#top"]').fadeIn();
        } else {
            $('a[href="#top"]').fadeOut();
        }
    });

    $('a[href="#top"]').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});
</script>

  </body>
</html>
