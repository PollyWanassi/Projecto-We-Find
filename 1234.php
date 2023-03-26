<?php
 session_start();
 include_once('config.php');

 if((!isset($_SESSION['email']) == true) and (!isset($_session['senha']) == true))
 {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:Entrar.php');
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
              <li><a href="perfil_original.php">Perfil</a></li>
                <li><a href="cadastro_de_casas.php">Vender</a></li>
                <li><a href="contactos.html">Contatos</a></li>
            <li><a href="sobre.html">Sobre Nós</a></li>
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
            <h1> Exposição dos Imoveis</h1>
          </div>

          <div class="conteudo">
            

          <table class=" table" color="blue">
  <thead>
    <tr>
      <th scope="col">  </th>
      <th scope="col">  </th>
      <th scope="col">  </th>
      <th scope="col">  </th>
      <th scope="col">  </th>
      <th scope="col">  </th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody>
 
   <?php
 While($user_data=mysqli_fetch_assoc($result))
   {
    ?>
    <tr>
     <td><img height="200" src="<?php echo $user_data ['fotos']?>"></td>
     <td><?php echo $user_data ['tipo']?></td>
    <td><?php echo $user_data ['preco']?></td>
    <td><?php echo $user_data ['cidademunicipio']?></td>
    <td><?php echo $user_data ['endereco']?></td>
    <td><?php echo $user_data ['Pretende']?></td>
  

    <td> 
    <a class='btn' name='btn' href='carrinho.html'>

    <td> 
    <a class='btn' name='btn' href='marcação.php'>

    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
  <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
   </svg>
    </a>


    </td>
   </tr>

    <?php
   }

   
   
   if (isset($_POST['btn'])) {
    header('Location: marcação.php');
    exit;
  }


  
   ?>
   

  </tbody>
</table>




    
  
           
          </div>





          <div class="slogan" ></div>   
        </div>
    </main>



    <footer >
      <div class=" container-footer" >
      
      </div>

      <div id="conteiner_f" >



        <div id="item2f">
          <p>Redes sociais<i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-whatsapp"></i>

             </p>

             <p><a href="contactos.html">Contacte nos</a> </p>
        </div>
      </div>

    </footer>
</body>
</html>


