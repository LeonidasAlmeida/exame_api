<?php
// Configurações do banco de dados
$hostname = "localhost";
$username = "LENIDAS";
$password = "RENOMEGAM";
$database = "IMOBILIARIA_";

// Conexão com o banco de dados
$conn = new mysqli($hostname, $username, $password, $database);

// Verifica conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>