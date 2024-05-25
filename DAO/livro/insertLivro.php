<?php
// Conexão com o banco de dados
include 'conexao_bd.php';

// Obter dados do formulário
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];

// Inserir novo livro no banco de dados
$sql = "INSERT INTO livros (titulo, autor) VALUES ('$titulo', '$autor')";
if ($conexao->query($sql) === TRUE) {
    echo "Livro adicionado com sucesso!";
} else {
    echo "Erro ao adicionar livro: " . $conexao->error;
}

// Fechar conexão
$conexao->close();
?>