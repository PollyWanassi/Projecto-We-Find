<?php
if(isset($_POST['submit']))
{
  
   include_once('config.php');
   $dia=$_POST['dia'];
   $hora=$_POST['hora'];
   


   $result=mysqli_query($conexao,"INSERT INTO marcacao(dia,hora) VALUES ( '$dia',
   '$hora')"); 


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
    <link rel="stylesheet" href="estilo-m.css">

    <!-- boxicons Css -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">

    

    <title>Marcação</title>
</head>
<body>

    <!--nave bar-->


<header class="header">

        <img src="img/logo.png" width="55px" height="55px" alt="logo">
        <nav>
      
        <ul>
            <li><a href="pag-principal.php">Voltar a página Inicial</a></li>
            <li><a href="contactos.html">Contactos</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="#"></a></li>
            
        </ul>
    </nav>

</header>
    
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <img src="img/logo.png" alt="" class="go"></a>
                <header class="lo">Faça a sua Marcação</header>

                <form action="marcação.php" method="POST">

                    <div class="field input-field">
                     <input type="date" class="input"  id="nome" name="dia" placeholder="data" required>
                     </div>
                     
                     <div class="field input-field">
                        <input type="time" class="input"  id="tel" name="hora" placeholder="hora" required>
                        </div>
         
                     <h1>Disponibilidade</h1>
    <table>
      <tr>
        <th>Dia</th>
        <th>Horário</th>
        <th>Disponibilidade</th>
      </tr>
      <tr>
        <td>Segunda-feira</td>
        <td>08:00 - 16:00</td>
        <td>Disponível</td>
      </tr>
      
      <tr>
        <td>Sábado</td>
        <td>09:00 - 14:00</td>
        <td>Disponível</td>
      </tr>
      <tr>
        <td>Domingo</td>
       <td>09:00 - 14:00</td>
        <td>Indisponível</td>
      </tr>
     
    </table>
    <br>
                    
                     
                        <div class="field button-field">
                        <button type="submit" name="submit" id="submit" >Enviar</button>
                     </div>
                     
                     
            </div>
        </div>
    </section>

    <!--JavaScript-->
<script src="js/cont.js"></script>

</body>
</html>