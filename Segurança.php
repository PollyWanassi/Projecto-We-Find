
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


$sql="SELECT * FROM usario ORDER BY id DESC";

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

    <title>Segurança/Pagamento </title>
</head>
<body>
    
    <header class="navbar">
        <!--  NavBar -->
    
        <img src="img/logo.png"  width="55px" height="55px" alt="" class="logo">
        <nav>
            
            <div class="nav-lists">
                <li><a href="">Comprar</a></li>
                <li><a href="">Vender</a></li>
                <li><a href="">Carrinho</a></li>
            </div>
            <img src="img/user.jpg" alt="" class="user-pic" onclick="toggleMenu()">
    
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="img/user.jpg">
                        <h2>Carlos Sissimo</h2>
                    </div>
                    <hr>
    
                    <a href="#" class="sub-menu-link">
                        <img src="bx-user.svg" alt="">
                        <p>Editar Perfil</p>
                        <span>></span>
                    </a>
                    <!--<a href="#" class="sub-menu-link">
                        <img src="bx-cog.svg" alt="">
                        <p>Settings & Privacy</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="bx-help-circle.svg" alt="">
                        <p>Help & Support</p>
                        <span>></span>
                    </a>-->
                    <a href="#" class="sub-menu-link">
                        <img src="bx-exit.svg" alt="">
                        <p>Logout</p>
                        <span>></span>
                    </a>
    
    
                </div>
            </div>
    
        </nav>
    </header>

    <section class="container forms">

        <section class="glass">
    
            <div class="lock-user1">
    
                <a href="perfil_original.html" class="use">
    
                    <img src="bx-user.svg" alt="" >
                    
                </a>
    
                <br>
                <br>
    
                <a href="#" class="lock">
    
                    <img src="bx-lock-alt.svg" alt="">

                </a>
    
            </div>
    
        </section>

        <div class="form login">
            <div class="form-content">
                <img src="img/logo.png" alt="" class="go"></a>
                <header class="lo">Nome</header><br><br><br><br>

                 <form action="#">

                    <div class="perfil">
                        <h2>PASSWORD</h2>
                        <h5></h5>
                    </div>

                    <div class="perfil">
                        <h2>AUNTENTICAÇÃO 2 FACTORES </h2>
                        <h5>Ativar</h5>
                    </div>

                    <div class="perfil">
                        <h2>Metódo De Pagamento </h2>
                        <h5>Paypal</h5>
                        <h5>Visa/MasterCard</h5>
                    </div>

                     <div class="field button-field">
                        <button>Guardar</button>
                     </div>
                     <br><br>
                 </form>
            </div>
        </div>
    </section>

    <!-- ===== java ===== -->
<script src="perfl.js"></script>


</body>
</html>