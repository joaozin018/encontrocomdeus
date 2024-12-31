// Exemplo de validação simples (caso deseje usar)
document.querySelector('.registration-form').addEventListener('submit', function(event) {
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    
    if (!nome || !email) {
        event.preventDefault();
        alert("Por favor, preencha todos os campos obrigatórios.");
    }
});
