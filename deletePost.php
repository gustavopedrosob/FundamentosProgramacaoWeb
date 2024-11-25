<?php
session_start();
require 'checkAuthentication.php';
$conn = new mysqli("localhost:3306", "root", "", "programacaoweb");

$id = $conn->real_escape_string($_GET['id']);

$result = $conn->query("SELECT * FROM postagens WHERE id = $id;");
$row = $result->fetch_assoc();

if ($row["email"] === $_SESSION["email"]) {
    $result = $conn->query("DELETE FROM postagens WHERE id = $id;");
    $conn->close();
    header('Location: posts.php');
} else {
    header('Location: index.php');
}
?>