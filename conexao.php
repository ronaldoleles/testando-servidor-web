<?php
  $dbHostName = "localhost"; 
  $dbUsuario = "root";
  $dbSenha = "";
  $dbBancoDados = "formulario";

  $banco = new mysqli($dbHostName,$dbUsuario,$dbSenha,$dbBancoDados);
  if($banco->connect_errno)
  {
    echo "falha ao conectar: (" . $banco->connect_errno .")". $banco->connect_errno;
  }
  else
  {
    echo "Conexão efetuada com sucesso";
  }

?>
