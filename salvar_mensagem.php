<?php
// Verifica se a variável 'mensagem' está definida e não está vazia
if (isset($_GET['mensagem']) && !empty($_GET['mensagem'])) {
    // Obtém a mensagem do parâmetro GET
    $mensagem = $_GET['mensagem'];

    // Abre o arquivo CSV para escrita (adiciona 'a' para que os dados sejam anexados ao final do arquivo)
    $arquivo = fopen('mensagens.csv', 'a');

    // Escreve a mensagem no arquivo CSV
    fputcsv($arquivo, array($mensagem));

    // Fecha o arquivo CSV
    fclose($arquivo);

    // Retorna uma resposta de sucesso
    echo "Mensagem salva com sucesso!";
} else {
    // Se a mensagem não foi fornecida, retorna uma mensagem de erro
    echo "Erro: Nenhuma mensagem fornecida.";
}
?>
