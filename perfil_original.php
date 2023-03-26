
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


$sql="SELECT * FROM usario WHERE Email = email";

$result = $conexao->query($sql);

//print_r($result);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Css -->
     <link rel="stylesheet" href="perfil-2.0.css">


    <title>Perfil 2.0</title>
</head>
<body>
    
    <header class="navbar">
        <!--  NavBar -->
    
        <img src="img/logo.png"  width="55px" height="55px" alt="" class="logo">
        <nav>
            
            <div class="nav-lists">
            <li><a href="pag-principal.php">Voltar a página Inicial</a></li>
                <li><a href="contactos.html">Contatos</a></li>
            <li><a href="sobre.html">Sobre Nós</a></li>
                <li><a href=""> </a></li>
            </div>
            <img src="img/transferir.jpg" alt="" class="user-pic" onclick="toggleMenu()">
    
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                   <!-- <div class="user-info">
                        <img src="img/user.jpg">
                       <--!-- <h2>Carlos Sissimo</h2>
                    </div>
                    <hr>
    
                    <a href="#" class="sub-menu-link">
                        <img src="bx-user.svg" alt="">
                        <p>Editar Perfil</p>
                        <button><span>></span></button>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="bx-cog.svg" alt="">
                        <p>Settings & Privacy</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="bx-help-circle.svg" alt="">
                        <p>Help & Support</p>
                        <span>></span>
                    </a>-->
                    <a href="Sair.php" class="sub-menu-link">
                        <img src="img/transferir.jpg" alt="">
                        <p>Logout</p>
                        <button><span >></span></button>
                    </a>
    
    
                </div>
            </div>
    
        </nav>
    </header>


    

    <section class="container forms">
        
        <section class="glass">
    
            <div class="lock-user">
    
                <a href="#" class="use">
    
                    <img src="bxs-user.svg" alt="">
                    
    
                </a>

                <br>
                <br>
    
                <a href="Segurança.html" class="lock">
    
                    <img src="bx-lock.svg" alt="">
    
                </a>
    
            </div>
    
        </section>

        

        <div class="form login">

            <div class="form-content">
                <img src="img/logo.png" alt="" class="go"></a>
                <header class="lo">
                   
                </header><br><br><br><br>

                 <form action="#">

                 <?php
 if($user_data=mysqli_fetch_assoc($result))
   {
    ?>

                    <div class="perfil">
                        <h2>EMAIL  </h2><h5><?php echo $user_data ['email']?></h5>
                    </div>

                    <div class="perfil">
                        <h2>Nº TELEFONE</h2><h5><?php echo $user_data ['telefone']?></h5>
                    </div>

                 

                    <?php
   }
   ?>
   
                    
                     <br><br>
                 </form>
            </div>
        </div>

        
    </section>

    <!--JavaScript-->
<script src="perfl.js"></script>


</body>
</html>