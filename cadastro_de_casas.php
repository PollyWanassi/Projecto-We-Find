
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cadastro de casas.css">

</head>
<body>
    <header>
        <img src="img/logo.png" width="55px" height="55px" alt="logo">
        <nav>
      
        <ul>
            <li><a href="/pag-principal/pag-principal.html">Comprar</a></li>
            <li><a href="/Comprar/carrinho.html">Carrinho</a></li>
        </ul>
    </nav>
</header>


    <h1 class="tit">REGISTRO DE CASAS</h1>
        <form class="container" action="#" method="#">
       

            <div class="container-principal">
                <div class="select-container">
                  
                    <fieldset name="det">
                        <legend >Descrição</legend>

                        <label for="Ed">Tipo de Edificio</label>
                        <select name="ed" id="Ed">
                            <option value="Loja">Loja</option>
                            <option value="casa">Casa</option>
                            <option value="Fábrica">Vivenda</option>
                            <option value="Fábrica">Fábrica</option>
                        </select>

                        <!--   <label for="qu">Nº de Quartos</label>
                        <select name="" id="qu">
                            <option value="">Nenhum</option>
                            <option value="T1">1 Quarto</option>
                            <option value="T2">2 Quarto</option>
                            <option value="T3">3 Quarto</option>
                            <option value="T4">4 Quarto</option>
                            <option value="T5">5 Quarto</option>
                            <option value="T6">6 Quarto</option>
                            <option value="T7">7 Quarto</option>
                        </select>

                       <label for="isuites">Suites</label>
                        <select name="" id="isuites">
                            <option value="T1">Nenhum</option>
                            <option value="">1 Suite</option>
                            <option value="">2 Suites</option>
                            <option value="">3 Suites</option>
                        </select> -->
                     

                    </fieldset>
                    <fieldset class="campo-loc">
                        <legend>Localização</legend>

                        <label for="iprovincia">Província</label>
                        <input class="textinp" type="text" id="iprovincia" ><br>

                        <label for="imucipio">Municipio</label>
                        <input class="textinp" type="text" id="imucipio"><br>

                        <label for="ibairro">Bairro</label>
                        <input class="textinp" type="text" id="ibairro" >
                    </fieldset>
                        <br>
                        
                    <label for="itextarea">Detalhes</label><br>
                        <textarea class="texta" name="" id="itextarea" cols="50" rows="10" maxlength="400" placeholder="Escreva os detalhes da própriedade, compartimentos da estrutura em menos de 400 palavras"></textarea>
                        <br><br>

                        <div class="container-direito">

                            <h3>Pretende</h3>
                            <label for="ivender">Vender
                            <input class="rad-b" type="radio" name="pretende" id="pretende" value="Vender"></label>
                            <label for="ialugar">Alugar</label>
                            <input class="rad-b" type="radio" name="pretende" id="pretende"value="Alugar">
                                <br>
                                
                                
                                <br>
                                
                                <label for="ipreco">Preço <input class="textinp" type="number" name="preço" id="ipreco"></label>
                                <br>
                                
                                <h3>Escolha 4 imagens da propriedade</h3>
                                <label class="iml"for="inp-file1">Selecione uma imagem</label>
                                <input id="inp-file1"type="file" >
                                
                                <!-- <input id="inp-file2"type="file">
                                <input id="inp-file3"type="file">
                                <input id="inp-file4"type="file"> -->
                        </div>
                        <br>
                </div>         
                           <!-- -->
                <br>
                
            </div>

            <div class="buttons">
                <input class="sub-res" type="reset" name="Cancelar">
                <input class="sub-res" type="submit" name="Cadastrar" id="sub">
            </div>
        </form>
    
</body>


<?php
if(isset($_POST['submit']))
{
   
  include_once('Config2.php');
  $tipo=$_POST['tipo'];
  $preco=$_POST['preco']; 
   $comentarios=$_POST['comentarios'];
   $endereco=$_POST['endereco'];
   $cidademunicipio=$_POST['cidademunicipio'];
   $Pretende=$_POST['pretende'];
  // $fotos=$_POST['fotos'];
   





  // $result=mysqli_query($conexao,"INSERT INTO imovel(Tipo,Preco,Comentarios,Endereco,Cidademunicipio,Pretende,fotos, nome) VALUES ( '$tipo',
  // '$preco','$comentarios','$endereco','$cidademunicipio', '$Pretende', '$path','$nomeDoArquivo')"); 


}

session_start(); 
include_once('Config2.php'); 

if(isset($_FILES['fotos'])){
    $fotos = $_FILES['fotos'];
   // var_dump($_FILES['fotos']);

   if($fotos['error'])
    die("Falha ao enviar arquivo");

    if($fotos['size'] > 2097152)
     die("Arquivo muito grande!! Max:2MB");

   $pasta="Fotos/";
  $nomeDoArquivo = $fotos['name'];
   $novoNomeDoArquivo = uniqid();
   $extensao= strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if($extensao != "jpg" && $extensao !='png'&& $extensao != "jpeg")
   die(" Tipo de Arquivo não aceito");

    $path= $pasta . $novoNomeDoArquivo . "." .$extensao;
    $deu_certo = move_uploaded_file($fotos["tmp_name"], $pasta . $novoNomeDoArquivo . "." .$extensao);
   // if($deu_certo) {
      // $mysqli->query("INSERT INTO imovel(fotos, nome) VALUES ( '$path','$nomeDoArquivo')") or die($mysqli->error);  

    
  // echo "<p>Arquivo enviado com Sucesso! Para acessa-lo; clique aqui: <a target=\"_blank\" href=\"Fotos/$novoNomeDoArquivo.$extensao\">Clique aqui.</a></p>";
   // }
  // else
   // echo "<p> Falha ao enviar arquivo </p>";
    
   $result=mysqli_query($conexao,"INSERT INTO imovel(Tipo,Preco,Comentarios,Endereco,Cidademunicipio,Pretende,fotos, nome) VALUES ( '$tipo',
   '$preco','$comentarios','$endereco','$cidademunicipio', '$Pretende', '$path','$nomeDoArquivo')"); 

//$result=mysqli_query($conexao,"INSERT INTO imovel(tipo,preco,comentarios,endereco,cidademunicipio,pretende,fotos) VALUES ( '$tipo',
//'$preco','$comentarios','$endereco','$cidademunicipio', '$Pretende', '$fotos')"); 

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cadastrodecasas.css">

</head>
<body>

    <header>
        <img src="img/logo.png" width="55px" height="55px" alt="logo">
        <nav>
      
        <ul>
            <li><a href="pag-principal.php">Voltar a Página inicial</a></li>
            <li><a href="contactos.html">Contatos</a></li>
            <li><a href="sobre.html">Sobre Nós</a></li>
        </ul>
    </nav>
</header>
    <h1 class="tit">REGISTRO DE CASAS</h1>

        <form class="container" enctype="multipart/form-data" action="" method="POST">

        <form class="container" action="Config2.php" method="POST">

       
<br>
            <div class="container-principal">
                <div class="select-container">
                  
                    <fieldset name="det">
                        <legend >Descrição</legend>

                        <label for="ed">Tipo de Edificio</label>
                        <select name="tipo" id="Tipo">
                            <option value="Loja">Loja</option>
                            <option value="casa">Predio</option>
                            <option value="Vivenda">Vivenda</option>
                            <option value="Vivenda">Terreno</option>
                        </select>

                       
                     

                    </fieldset>
                    <fieldset class="campo-loc">
                        <legend>Localização</legend>
                        <label for="iprovincia">Localização</label>
                        <input class="textinp" type="text" name="cidademunicipio" id="iprovincia"  placeholder="Provincia ou Munícipio" ><br>
                       <!-- <label for="imucipio">Municipio</label>
                        <input class="textinp" type="text" name="cidade" id="imucipio"><br>-->
                        <label for="ibairro">Endereço</label>
                        <input class="textinp" type="text" name="endereco" id="Bairro"placeholder="Endereço" >
                    </fieldset>
                        <br>
                        
                    <label for="itextarea">Detalhes</label><br>
                        <textarea class="texta" name="comentarios" id="itextarea" cols="50" rows="10" maxlength="400" placeholder="Escreva os detalhes da própriedade, compartimentos da estrutura em menos de 400 palavras"></textarea>
                        <br><br>

                        <div class="container-direito">

                            <h3>Pretende</h3>
                            <label for="ivender">Vender
                            <input class="rad-b" type="radio" name="pretende" id="ialugar/vender" value="Vender"></label>
                            <label for="ialugar">Alugar</label>
                            <input class="rad-b" type="radio" name="pretende" id="ialugar/vender"value="Alugar">
                                <br>
                                
                                
                                <br>
                                
                                <label for="ipreco">Preço <input class="textinp" type="number" name="preco" id="Preco"></label>
                                <br>
                                <br>
                                <h3>Escolha 1 colagem das fotos da propriedade</h3>
                                <label class="iml"for="inp-file1">Selecione uma imagem</label>
                                <input id="inp-file1"type="file" name="fotos" >
                               <!-- <input id="inp-file2"type="file">
                                <input id="inp-file3"type="file">
                                <input id="inp-file4"type="file">-->
                        </div>
                        <br>
                </div>         
                           <!-- -->
                <br>
                
            </div>

            <div class="buttons">
                <input class="sub-res" type="reset" name="Cancelar">
                <button class="sub-res" type="submit" name="submit"  id="submit"> Enviar </button>
            </div>
        </form>
    
</body>

</html>