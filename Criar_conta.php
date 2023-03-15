<?php
if(isset($_POST['submit']))
{
  // print_r($_POST['nome']);
  // print_r($_POST['sobrenome']);
  // print_r($_POST['email']);
  // print_r($_POST['telefone']);
   //print_r($_POST['tipo_usuario']);
   include_once('config.php');
   $nome=$_POST['nome'];
   $sobrenome=$_POST['sobrenome'];
   $senha=$_POST['senha'];
   $telefone=$_POST['telefone'];
   $email=$_POST['email'];
   $tipo_usuario=$_POST['tipo_usuario'];



   $result=mysqli_query($conexao,"INSERT INTO usario(Nome,Sobrenome,Senha,Telefone,Email,Tipo_usuario) VALUES ( '$nome', '$sobrenome','$senha',
   '$telefone','$email','$tipo_usuario')"); 

  




}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- Css -->
    <link rel="stylesheet" href="entrar.css">

    <!-- boxicons Css -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">

    

    <title>Cadastrar</title>
</head>
<body>

    <!--nave bar-->


<header class="header">

        <img src="img/logo.png" width="55px" height="55px" alt="logo">
        <nav>
      
        <ul>
            <li><a href="pag-principal/pag-principal.html">Home</a></li>
            <li><a href="#"></a></li>
            <!--<li><a href="#">Vender</a></li>
            <li><a href="#" >Carrinho</a></li>-->
        </ul>
    </nav>

</header>
    
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <img src="img/logo.png" alt="" class="go"></a>
                <header class="lo">Cadastro</header>

                <form action="Criar_conta.php" method="POST">

                    <div class="field input-field">
                     <input type="text" class="input"  id="Nome" name="nome" placeholder="Nome" required>
                     </div>
                     
                     <div class="field input-field">
                     <input type="" class="input"  id="Sobrenome" name="sobrenome" placeholder="Sobrenome" required>
                     </div>

                     <div class="field input-field">
                        <input type="tel" class="input"  id="Telefone" name="telefone" placeholder="Telefone" required>
                        </div>

                     <div class="field input-field">
                     <input type="email" class="input"  id="Email" name="email" placeholder="Email" required>
                     </div>
                     <br>
                     <h5>Tipo De Usuário</h5>
                     <br>
                     <label for="ivender">Vendedor
                        <input type="radio" name="tipo_usuario" class="rad-b" id="ivende" value="Vendedor" >
                     </label>

                     <label for="icomp">Comprador
                        <input type="radio" name="tipo_usuario" class="rad-b" id="icomp" value="Comprador" >
                     </label>
                     <br><br>
                     <div class="field input-field">
                     <input type="password" class="password"  id="Senha" name="senha" placeholder="Password" required>
                     </div>

                     <div class="field input-field">
                        <input type="password" class="password"  id="Repetir_senha" name="repetir_senha" placeholder="Repetir Password" required>
                        <i class="bx bx-hide eye-icon"></i>
                        </div>
                        <div class="field button-field">
                        <button type="submit" name="submit" id="submit" >Cadastrar</button>
                     </div>
                     
                     <div class="form-link">
                        <span>Fazer <a href="Login.php" class="link login-link">login</a></span>
                     </div>
            </div>
        </div>
    </section>

    <!--JavaScript-->
<script src="js/cont.js"></script>

</body>
</html>