<?php
// Inclui o arquivo de configuração do banco de dados
require_once 'config.php';

// Função para buscar e retornar agentes de propriedade
function getPropertyAgents() {
    global $conn;

    // Consulta SQL para selecionar agentes de propriedade
    $sql = "SELECT * FROM property_agents";

    $result = $conn->query($sql);

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        $agents = array();
        while ($row = $result->fetch_assoc()) {
            $agents[] = $row;
        }
        return $agents;
    } else {
        return array();
    }
}

// Resposta JSON para a API
header('Content-Type: application/json');

// Obtém e imprime os agentes de propriedade
$agents = getPropertyAgents();
echo json_encode($agents);
?>
