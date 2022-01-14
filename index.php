<?php
  if(isset($_POST['submit']))
  {
    print_r('NOME:'.$_POST['nome']);
    print_r('<br>');
    print_r('CPF: '.$_POST['cpf']);
    print_r('<br>');
    print_r('TELEFONE: '.$_POST['telefone']);
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <script src="./scripts.js" defer></script>
  <title>CADASTRO DE FUNCIONARIOS</title>
</head>

<body>
  <div id="main-container">
    <h1>CADASTRE O FUNCIONARIO </h1>
<form id="register-form" enctype="multipart/form-data" action="index.php" method="POST">
      <div class="full-box">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" placeholder="Digite o nome">
      </div>
      <div class="full-box">
        <label for="cpf">CPF:</label>
        <input type="number" name="cpf" id="cpf" placeholder="Digite o CPF">
      </div>
      <div class="full-box">
        <label for="telefone">Telefone:</label>
        <input type="number" name="telefone" id="telefone" placeholder="Digite o telefone">
      </div>
      <div class="full-box">
        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto" accept="image/*">

      </div>
      <div class="full-box">
        <input type="submit" id="btn-submit" value="Registrar">

      </div>
      <p class="error-validation template"></p>
    </form>

  </div>
</body>

</html>