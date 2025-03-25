<?php
include '../config/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $capacidade = $_POST['capacidade'];
    $descricao = $_POST['descricao'];
    $sql = "INSERT INTO espacos (nome, tipo, capacidade, descricao) VALUES ('$nome', '$tipo', '$capacidade', '$descricao')";
    $conn->query($sql);
    header("Location: ../public/cadastro_espaco.php");
}
?>