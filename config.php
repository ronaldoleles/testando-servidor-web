<?php
  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = '123456';
  $dbName = 'servidorweb';

  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

  if (conexao->connect_errno)
  {
    echo "Erro";
  }
  else
  {
    echo "Conexão efetuada com sucesso";
  }
?>