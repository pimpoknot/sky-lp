<?php

/*
  Parâmetros de conexão com o banco de dados. O projeto utiliza PDO.

  O arquivo Connection.template.php server como um template de parâmetros 
  de conexão com o banco de dados.

  Se ainda não houver um arquivo 'Connection.php' neste diretório, 
  crie um arquivo Connection.php, então copie e cole o array $dbConfig nele.

  No arquivo Connection.php, defina os valores do array dbConfig com os parâmetros
  de conexão do seu banco de dados.
*/
$dbConfig = array(
  'host'     => '',
  'port'     => '',
  'dbname'   => '',
  'charset'  => 'utf8',
  'user'     => '',
  'password' => '',
);