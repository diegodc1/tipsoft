<?php
require_once('config.php');

$conn = new mysqli(SERVIDOR_MYSQL, USUARIO_MYSQL, SENHA_MYSQL, BANCO_MYSQL);


function openBD()
{
  // Criar conexão
  $conn = new mysqli(SERVIDOR_MYSQL, USUARIO_MYSQL, SENHA_MYSQL, BANCO_MYSQL);

  // Checar conexão
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

function closeBD($conn, $stmt)
{
  $stmt->close();
  $conn->close();
}
