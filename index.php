<?php
function calcularTempoBusca($url) {
    $inicio = microtime(true); // Captura o tempo inicial em microssegundos

    // Faz a requisição para a URL
    $conteudo = file_get_contents($url);

    $fim = microtime(true); // Captura o tempo final em microssegundos

    $tempo = $fim - $inicio; // Calcula o tempo decorrido
    return $tempo;
}

// URL que você deseja buscar
$url = getenv("URL");

// Chamada da função para calcular o tempo de busca
$tempoDeBusca = calcularTempoBusca($url);

echo "Tempo para buscar a URL: " . number_format($tempoDeBusca, 5) . " segundos";
?>
