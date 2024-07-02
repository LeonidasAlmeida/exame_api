<?php
// Inclui o arquivo de configuração do banco de dados
require_once 'config.php';

// Função para buscar e retornar tipos de propriedades
function getPropertyTypes() {
    global $conn;

    // Consulta SQL para selecionar tipos de propriedades
    $sql = "SELECT * FROM property_types";

    $result = $conn->query($sql);

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        $propertyTypes = array();
        while ($row = $result->fetch_assoc()) {
            $propertyTypes[] = $row;
        }
        return $propertyTypes;
    } else {
        return array();
    }
}

// Resposta JSON para a API
header('Content-Type: application/json');

// Obtém e imprime os tipos de propriedades
$propertyTypes = getPropertyTypes();
echo json_encode($propertyTypes);
?>
