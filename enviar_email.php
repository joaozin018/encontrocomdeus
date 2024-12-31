<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $genero = $_POST['genero'];
    $faixa_etaria = $_POST['faixa_etaria'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $pagamento = $_POST['pagamento'];
    
    // Adicionando um campo de e-mail no formulário HTML
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        // Caso o campo de e-mail não exista, defina um valor padrão ou envie uma mensagem de erro
        $email = "no-reply@dominio.com";
    }

    // Configurações do e-mail
    $to = "seu-email@dominio.com";  // Substitua com seu e-mail
    $subject = "Nova Inscrição - Encontro com Deus 2K25";

    // Corpo do e-mail
    $message = "
        <html>
        <head>
            <title>Nova Inscrição</title>
        </head>
        <body>
            <p><strong>Nome:</strong> $nome $sobrenome</p>
            <p><strong>Gênero:</strong> $genero</p>
            <p><strong>Faixa Etária:</strong> $faixa_etaria</p>
            <p><strong>Celular 1:</strong> $telefone1</p>
            <p><strong>Celular 2:</strong> $telefone2</p>
            <p><strong>Pagamento Online:</strong> $pagamento</p>
        </body>
        </html>
    ";

    // Para enviar um e-mail HTML, o cabeçalho Content-type deve ser especificado
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Cabeçalhos adicionais
    $headers .= "From: $nome <$email>" . "\r\n";  // O campo "From" pode ser ajustado conforme necessário

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Inscrição enviada com sucesso!";
    } else {
        echo "Erro ao enviar inscrição.";
    }
}
?>
