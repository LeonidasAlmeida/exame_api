<?php
// Inclui o arquivo de configuração do banco de dados
require_once 'config.php';

// Função para buscar e retornar imóveis
function getProperties() {
    global $conn;

    // Consulta SQL para selecionar imóveis
    $sql = "SELECT * FROM properties";

    $result = $conn->query($sql);

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        $properties = array();
        while ($row = $result->fetch_assoc()) {
            $properties[] = $row;
        }
        return $properties;
    } else {
        return array();
    }
}

// Resposta JSON para a API
header('Content-Type: application/json');

// Obtém e imprime os imóveis
$properties = getProperties();
echo json_encode($properties);
?>
