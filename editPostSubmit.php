<?php
session_start();
require 'checkAuthentication.php';
$conn = new mysqli("localhost:3306", "root", "", "programacaoweb");

$id = $_GET["id"];
$titulo = $conn->real_escape_string($_POST['titulo']);
$descricao = $conn->real_escape_string($_POST['descricao']);
$codigo = $conn->real_escape_string($_POST['codigo']);
$email = $_SESSION["email"];

$result = $conn->query("UPDATE postagens SET titulo = '$titulo', descricao = '$descricao', codigo = '$codigo', data_edicao = CURRENT_TIMESTAMP WHERE id = $id;");

$conn->close();
header('Location: posts.php');
?>