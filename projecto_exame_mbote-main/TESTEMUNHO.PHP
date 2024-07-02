<?php
// Inclui o arquivo de configuração do banco de dados
require_once 'config.php';

// Função para buscar e retornar depoimentos
function getTestimonials() {
    global $conn;

    // Consulta SQL para selecionar depoimentos
    $sql = "SELECT * FROM testimonials";

    $result = $conn->query($sql);

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        $testimonials = array();
        while ($row = $result->fetch_assoc()) {
            $testimonials[] = $row;
        }
        return $testimonials;
    } else {
        return array();
    }
}

// Resposta JSON para a API
header('Content-Type: application/json');

// Obtém e imprime os depoimentos
$testimonials = getTestimonials();
echo json_encode($testimonials);
?>
