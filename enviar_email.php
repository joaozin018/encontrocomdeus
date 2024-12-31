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
    
    // Cria a mensagem que será enviada para o WhatsApp
    $message = "Nova Inscrição - Encontro com Deus 2K25\n";
    $message .= "Nome: $nome $sobrenome\n";
    $message .= "Gênero: $genero\n";
    $message .= "Faixa Etária: $faixa_etaria\n";
    $message .= "Celular 1: $telefone1\n";
    $message .= "Celular 2: $telefone2\n";
    $message .= "Pagamento Online: $pagamento\n";
    
    // Codificar a mensagem para URL
    $encoded_message = urlencode($message);
    
    // Número de telefone para o qual você deseja enviar a mensagem (adapte para o número correto)
    $whatsapp_number = "5521969632153";
    
    // Criar o link do WhatsApp
    $whatsapp_url = "https://wa.me/21969632153?text=$encoded_message";
    
    // Redirecionar para o WhatsApp
    header("Location: $whatsapp_url");
    exit(); // Impede que o código continue após o redirecionamento
}
?>
