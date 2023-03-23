<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carrinho</title>
    <link rel="stylesheet" href="carrinho.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"
  />
</head>
<body>
    <header>
        <span>Carrinho de compras do <b>WE Find</b></span>
      </header>
      <main>
        <div class="page-title">Seu Carrinho</div>
        <div class="content">
          <section>
            <table>
              <thead>
                <tr>
                  <th>Propriedade</th>
                  <th>Preço</th>
                  <th>Total</th>
                  <th>-</th>
                </tr>
                <?php
                 include_once('config2.php');
                 $result = mysqli_query($conexao, "SELECT * FROM imovel");
                
                 While($user_data=mysqli_fetch_assoc($result))
   {
    echo "<tr>";
    echo "<td>". $user_data['id']."</td>";
    echo "<td>". $user_data['fotos']."</td>";
     echo "<td>". $user_data['tipo']."</td>";
    echo "<td>". $user_data['preco']."</td>";
    echo "<td>". $user_data['cidademunicipio']."</td>";
    echo "<td>". $user_data['endereco']."</td>";
    echo "<td>". $user_data['Pretende']."</td>";
    echo "</tr>";
  }
  
                ?>
              </thead>
              <tbody>
              
              </tbody>
            </table>
          </section>
          <aside>
            <div class="box">
              <header>Resumo da compra</header>
              <div class="info">
                <div><span>Sub-total</span><span> </span></div>
                
                <div>
                 
                </div>
              </div>
              <footer>
                <span>Total</span>
                <span> </span>
              </footer>
            </div>
            <button id="">Comprar</button>
            <button id="">Alugar</button>
          </aside>
        </div>
      </main>
    
</body>
</html>