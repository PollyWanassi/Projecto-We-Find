
<?php
if(isset($_POST['submit']))
{
   // print_r($_POST['tipo']);
   // print_r($_POST['preco']);

  // print_r($_POST['comentarios']);
   //  print_r($_POST['endereco']);
  // print_r($_POST['cidade']);
  //print_r($_POST['alugar/vender']);
  include_once('Config2.php');
  $tipo=$_POST['tipo'];
  $preco=$_POST['preco']; 
   $comentarios=$_POST['comentarios'];
   $endereco=$_POST['endereco'];
   $cidademunicipio=$_POST['cidademunicipio'];
   $Pretende=$_POST['pretende'];
   $fotos=$_POST['fotos'];
   




   $result=mysqli_query($conexao,"INSERT INTO imovel(Tipo,Preco,Comentarios,Endereco,Cidademunicipio,Pretende,Fotos) VALUES ( '$tipo',
   '$preco','$comentarios','$endereco','$cidademunicipio', '$Pretende', '$fotos')"); 


}
?>

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
            <li><a href="pag-principal.php">Voltar a Página inicial</a></li>
        </ul>
    </nav>
</header>
    <h1 class="tit">REGISTRO DE CASAS</h1>
        <form class="container" action="cadastro de casas.php" method="POST">
       
<br>
            <div class="container-principal">
                <div class="select-container">
                  
                    <fieldset name="det">
                        <legend >Descrição</legend>

                        <label for="ed">Tipo de Edificio</label>
                        <select name="tipo" id="Tipo">
                            <option value="Loja">Loja</option>
                            <option value="casa">Casa</option>
                            <option value="Vivenda">Vivenda</option>
                            <option value="Fábrica">Fábrica</option>
                        </select>

                       
                     

                    </fieldset>
                    <fieldset class="campo-loc">
                        <legend>Localização</legend>
                        <label for="iprovincia">Localização</label>
                        <input class="textinp" type="text" name="cidademunicipio" id="iprovincia"  placeholder="Provincia, municipio e Bairro" ><br>
                       <!-- <label for="imucipio">Municipio</label>
                        <input class="textinp" type="text" name="cidade" id="imucipio"><br>-->
                        <label for="ibairro">Endereço</label>
                        <input class="textinp" type="text" name="endereco" id="Bairro">
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