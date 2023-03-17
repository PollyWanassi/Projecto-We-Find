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



    <title>Login</title>
</head>
<body>
    <!--nave bar-->
    
    <header class="header">

        <img src="img/logo.png" width="55px" height="55px" alt="logo">
        <nav>
      
        <ul>
            <li><a href="Compras.html">Voltar</a></li>
            <!--<li><a href="#">Minha conta</a></li>
            <li><a href="#">Vender</a></li>-->
            <li><a href="#" ></a></li>
        </ul>
    </nav>

</header>

    
    <section class="contain forms">
        <div class="form login">
            <div class="form-content">
                <img src="img/logo.png" alt="" class="go"></a>
                <header class="lo">login</header>

                <form action="testelogin.php" method="POST">
                        

                     <div class="fiel input-field">
                     <input type="email" class="input" name="email"  placeholder="Email" required>
                     </div>

                     <div class="fiel input-field">
                     <input type="password" class="password" name= "senha" placeholder="password" required>
                     <i class="bx bx-hide eye-incon"></i>
                     </div>

                     <div class="form-link">
                        <a href="#" class="forgot-pass">Esqueceu a Senha?</a>
                     </div>

                     <div class="field button-field">
                     <button type="submit" name="submit" Value="enviar" >Login</button>
                    </div>
                     
                 </form>

                     <div class="form-link">
                        <span>Já tem uma conta? <a href="Criar_conta.php" class="link singnup-link">Cadastrar</a></span>
                     </div>
            </div>
        </div>
    </section>


<!--JavaScript-->
<script src="js/cont.js"></script>


</body>
</html>