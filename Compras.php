<?php
 
 include_once('config.php');

 

$sql="SELECT * FROM imovel ORDER BY id DESC";

$result = $conexao->query($sql);

//print_r($result);

 ?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="compras.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <title>Compras</title>
</head>
<body>
    <header>
        <nav >
    
            <div class="logo" >
                <span> <img src="img/logo.png" width="70" height="70" alt="logo"></span>
    
            </div>
            <ul>
                <li><a href="contactos1.html">Contatos</a></li>
            <li><a href="sobre1.html">Sobre Nós</a></li>
                <li><a href="Entrar.php">Login </a></li>
                <li><a href="">   </a></li>
            </ul>
        </nav>
    </header>
        <div class="pai">
            <!--Categorias-->
                <div class="container-categoria">
                    <div class="item"><img src="img/Talatona_Diamante_Luanda-750x410.jpg" alt=""></div>
                    <div class="item"><img src="img/Imovel_Edificio_Baia_01-2-1740x960-c-center.jpg" alt=""></div>
                    <div class="item"><img src="img/IMG-20200703-WA0121-1740x960-c-center.jpg" alt=""></div>
                </div>
                <!--Destaques-->
                <div class="container-Destaques"></div>
                <!--Feed-->
                <div class="container-Conteudo">
            

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
      <a class='btn' name='btn' href='Entrar.php'>
  
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
        </div>
</body>
</html>