<?php
    $conexao = mysqli_connect("localhost", "root", "","cd6");
   
  if($conexao)
  {
  $baseSelecionada = mysql_select_db("cd6");
  if (!$baseSelecionada) {
      die ('Não foi possível conectar a base de dados: ' . mysql_error());
  } } else {
      die('Não conectado : ' . mysql_error());
  }
  ?>