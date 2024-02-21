<?php
// Verifica se a mensagem foi enviada
if (isset($_GET['mensagem'])) {
    $mensagem = $_GET['mensagem'];
    // Abre o arquivo CSV para escrita
    $file = fopen("mensagens.csv", "a");
    // Escreve a mensagem no arquivo CSV
    fputcsv($file, array($mensagem));
    // Fecha o arquivo
    fclose($file);
}
?>
