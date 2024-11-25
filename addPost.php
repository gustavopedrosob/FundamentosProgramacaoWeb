<?php
session_start();
require 'checkAuthentication.php';
$conn = new mysqli("localhost:3306", "root", "", "programacaoweb");

$titulo = $conn->real_escape_string($_POST['titulo']);
$descricao = $conn->real_escape_string($_POST['descricao']);
$codigo = $conn->real_escape_string($_POST['codigo']);
$email = $_SESSION["email"];

$result = $conn->query("INSERT INTO postagens (titulo, descricao, codigo, email) VALUES ('$titulo', '$descricao', '$codigo', '$email')");

$conn->close();
header('Location: posts.php');
?>