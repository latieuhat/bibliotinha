<?php
// Conexão com o banco de dados
include 'conexao_bd.php';

// Consulta SQL para obter a lista de livros
$sql = "SELECT * FROM livros";
$resultado = $conexao->query($sql);

// Exibir lista de livros
if ($resultado->num_rows > 0) {
    while ($livro = $resultado->fetch_assoc()) {
        echo "<li>" . $livro['titulo'] . " - " . $livro['autor'] . "</li>";
    }
} else {
    echo "Nenhum livro encontrado.";
}

// Fechar conexão
$conexao->close();
?>
adicionar_livro.php:

<php
Copy code
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

