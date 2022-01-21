<?php
 // if(isset($_POST['submit']))
  
    include_once("conexao.php");
  
    echo " -- clicou submit ---";
    print_r($_POST['nome']);
    print_r($_POST['cpf']);
    print_r($_POST['telefone']);
    
    
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];

    $result_usuario = mysqli_query ($banco, "INSERT INTO usuarios (nome, cpf, telefone) VALUES ('$nome', '$cpf', '$telefone')");
    
    /*  
    echo "Name: $name <br>";
    echo "CPF: $cpf <br>";
    echo "TEL: $telefone <br>";*/
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>CADASTRO DE FUNCIONARIOS</title>
</head>

<body>
  <div id="main-container">
    <h1>CADASTRE O FUNCIONARIO </h1>
    <form action="index.php" method="POST">
   
      <div class="full-box">
        <label for="name">Nome:</label>
        <input type="text" name="nome"  placeholder="Digite o nome">
      </div>
      <div class="full-box">
        <label for="cpf">CPF:</label>
        <input type="number" name="cpf" placeholder="Digite o CPF">
      </div>
      <div class="full-box">
        <label for="telefone">Telefone:</label>
        <input type="number" name="telefone"  placeholder="Digite o telefone">
      </div>
      <button type="submit">CONCLUIR</button>
    </form>
  </div>
</body>

</html>