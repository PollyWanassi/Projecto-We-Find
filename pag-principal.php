<?php
 session_start();

 if((!isset($_SESSION['email']) == true) and (!isset($_session['senha']) == true))
 {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:Entrar.php');
 }
$logado=$_SESSION['email'];

$sql="SELECT * FROM imovel ORDER BY id DESC";
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>página-principal</title>
    <link rel="stylesheet" href="pag-principal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"           integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
  
      <header>
        <img src="img/logo.png" alt="logo">
        <nav>
          <ul class="navegacao">
              <li><a href="perfil_original.html">Perfil</a><i class="fa-solid fa-cart-shopping"></i></li>
                <li><a href="cadastro de casas.html">Vender</a></li>
                <li><a href="carrinho.html">Carrinho</a></li>
          </ul>
        </nav>
      </header>
  

<!--  -->
<div class="content">
  <div class="search-bar" >
    <input type="text " class="search-bar_input" placeholder="pesquisar" aria-label="search"/>
    <buttom class="search-bar_submit" aria-label="submit search"><i class="fa-solid fa-magnifying-glass" ></i></buttom>

  </div>

</div>

<!-- o Conteudo vai ser mostrado no item2-->
    <main>
      <!--<div class="container" style="border: yellow solid 2px;">
        <div class="item item1">Item 1
          <div class="re-so"><img src="img/whatsapp.svg" alt=""></div>
          <div class="re-so"><img src="img/instagram.svg" alt=""></div>
          <div class="re-so"><img src="img/mobile-button-solid.svg" alt=""></div>
        </div> -->
      
        <div class="item item2" >
          <div class ="barranome">
            <h1></h1>
          </div>

          <div class="slider-cont">
          <div class="slides">
         <input type="radio" name="slide" id="slide1" checked>
         <input type="radio" name="slide" id="slide2">
         <input type="radio" name="slide" id="slide3">
         <input type="radio" name="slide" id="slide4">
         <input type="radio" name="slide" id="slide5">

              <div class="slide s1">
                <img src="img/luanda-11.jpg" alt="casa1">
              </div>

              <div class="slide s2">
                <img src="img/luanda-13.jpg" alt="casa2">
              </div>

              <div class="slide s3">
                <img src="img/luanda-15.jpg" alt="casa3">
              </div>

              <div class="slide s3">
                <img src="img/luanda-17.jpg" alt="casa4">
              </div>

              <div class="slide s3">
                <img src="img/luanda-24.jpg" alt="casa5">
              </div>


          </div>


          <div class="navigation">
            <label class="barsl" for="slide1"></label>
            <label class="barsl" for="slide2"></label>
            <label class="barsl" for="slide3"></label>
            <label class="barsl" for="slide4"></label>
            <label class="barsl" for="slide5"></label>
          </div>

          </div>

          <div class="barrades">
            <h1> DISPONIVEIS</h1>
          </div>

          <div class="conteudo">

       <!-- onde vai a tabela-->

      <table> 

      </table>

           <p><h1>oi</h1></p>
          </div>





          <div class="slogan" ></div>   
        </div>
    </main>



    <footer >
      <div class=" container-footer" >
      
      </div>

      <div id="conteiner_f" >

        <div id="item1f">
          <p>Localização:</p>
        </div>

        <div id="item2f">
          <p>Redes sociais<i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-whatsapp"></i>

             </p>

             <p>Contactos:</p>
        </div>
      </div>

    </footer>
</body>
</html>