<?php
session_start();
require 'config.php';
require_once('mysql.php');

if (isset($_SESSION['user_id'])) {
  $userId = $_SESSION['user_id'];
}

openBD();

$stmt = $conn->prepare("DELETE FROM `usuarios` WHERE `id` = (?)");
$stmt->bind_param("s", $deleteUserId);
$deleteUserId = $userId;

$stmt->execute();

closeBD($conn, $stmt);

session_unset();
header("Location: index.php");
