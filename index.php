<?php
function buscarArquivoJSON($url) {
    $inicio = microtime(true); // Captura o tempo inicial em microssegundos

    // Faz a requisição para a URL para obter o arquivo JSON
    $conteudoJSON = file_get_contents($url);

    $fim = microtime(true); // Captura o tempo final em microssegundos

    $tempo = $fim - $inicio; // Calcula o tempo decorrido

    // Decodifica o conteúdo JSON para um objeto PHP
    $objetoJSON = json_decode($conteudoJSON);

    return [
        'tempo' => $tempo,
        'objetoJSON' => $objetoJSON
    ];
}

// URL que você deseja buscar (um arquivo JSON)
$url = getenv("URL");

// Chamada da função para buscar o arquivo JSON
$resultadoBusca = buscarArquivoJSON($url);

echo "Tempo para buscar o arquivo JSON: " . number_format($resultadoBusca['tempo'], 5) . " segundos<br>";

echo "Objeto JSON:<br>";
echo "<pre>";
print_r($resultadoBusca['objetoJSON']);
echo "</pre>";
?>

