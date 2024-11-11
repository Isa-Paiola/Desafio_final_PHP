<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $id = $_POST['id']; // Recebe o modelo
    $modelo = $_POST['modelo']; // Recebe o efeito
    $efeito = $_POST['efeito'];
    $cor = $_POST['cor'];
    $valor = $_POST['valor'];
    $sql = "INSERT INTO cilios (id, modelo, efeito, cor, valor) VALUES ('$id', '$modelo', '$efeito', '$cor', '$valor')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>