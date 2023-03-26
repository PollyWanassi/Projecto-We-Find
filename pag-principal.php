<?php
 session_start();
 include_once('config.php');

 if((!isset($_SESSION['email']) == true) and (!isset($_session['senha']) == true))
 {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location:Entrar.php');
 }
$logado=$_SESSION['email'];


$sql="SELECT * FROM imovel ORDER BY id DESC";

$result = $conexao->query($sql);

//print_r($result);

 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
            <li><a href="cadastro_de_casas.php">Vender</a></li>
            <li><a href="contactos.html">Contactos</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="perfil_original.php">Perfil</a></li>
                <li><a href=""> </a></li>
          </ul>
        </nav>
      </header>
  

<!-- 
<div class="content">
  <div class="search-bar" >
    <input type="text " class="search-bar_input" placeholder="pesquisar" aria-label="search"/>
    <buttom class="search-bar_submit" aria-label="submit search"><i class="fa-solid fa-magnifying-glass" ></i></buttom>

  </div> -->

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
        

              <div class="slide s1">
                <img src="img/336659004_1559987487857189_1843217898508610978_n.jpg" alt="casa1">
              </div>

              <div class="slide s2">
                <img src="img/angola-luanda-ocean-corner-1024x683.jpg" alt="casa2">
              </div>

              <div class="slide s3">
                <img src="img/loja-em-projeto-nova-vida-segunda-fase.-big-23510.jpg" alt="casa3">
              </div>

           
          </div>
          <div class="navigation">
            <label class="barsl" for="slide1"></label>
            <label class="barsl" for="slide2"></label>
            <label class="barsl" for="slide3"></label>
            
          </div>
          </div>

          <div class="barrades">
            <h1> Exposição dos Imoveis</h1>
          </div>


          <div class="conteudo">
          
           <!--Card-->

           <div class="content"> 
    
              
                    
  
   <?php
 While($user_data=mysqli_fetch_assoc($result))

   {
    ?>
            <div class="card">
               <div class="topcard"> 
                <h2 class="title"> <?php echo $user_data ['tipo']?> </h2>
               </div>
                <div class="mediacard">
                <img  height="250px" width="100%" src="<?php echo $user_data ['fotos']?>">
                </div>
                 <div class="bottomcard">
                   <p class="bottomtext">DESCRIÇÃO:
                     <?php echo $user_data ['comentarios']?> </p> 
                   <p class="bottomtext"> </p> 
                   <ul class="lista">
                    <li> <?php echo $user_data ['cidademunicipio']?></li>
                    <li> <?php echo $user_data ['endereco']?></li>
                    <li>preço: <?php echo $user_data ['preco']?> / <?php echo $user_data ['Pretende']?></li>
                    <li></li>
                  </ul>
                   <p class="bottomtext"> </p> 
                   
                    <div class="actioncard"> 
                      <button class="action"><a class='btn' name='btn' href='marcação.php'> Solicitar encontro</a></button> 
                    </div>
                   </div> 
                  </div>
                  <?php
   }

   
   
   if (isset($_POST['btn'])) {
    header('Location: marcação.php');
    exit;
  }


  
   ?>
                  </div>


           <!--Card-->
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


