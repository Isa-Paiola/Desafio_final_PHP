<?php
    include 'conexao.php'; // Inclui o arquivo de conexão

    if (isset($_GET['id'])) { // Verifica se o ID foi passado
        $id = $_GET['id']; // Recebe o ID
        $sql = "SELECT * FROM cilios WHERE id = $id"; // Consulta o usuário
        $result = $conn->query($sql); // Executa a  consulta
        $cilios = $result->fetch_assoc(); // Obtém os dados do usuário
    }

    // Se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST ['id'];
        $modelo = $_POST['modelo']; // Recebe o novo modelos
        $efeito = $_POST['efeito']; // Recebe o novo efeito
        $cor = $_POST['cor']; // Recebe o novo cor
        $valor = $_POST['valor']; // Recebe o novo valor
        $sql = "UPDATE cilios SET modelo='$modelo', efeito='$efeito', cor='$cor', valor ='$valor' WHERE id = $id"; // Prepara a atualização

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
        } else {
            echo "Erro: " . $conn->error; // Mostra erro, se houver
       }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title> Atualizar Gerenciamento dos Cilios</title>
</head>
<body>
    <h1>Atualizar Gerenciamento Extensão de Cilios </h1>
    <form action="store.php" method="POST">
        
        <label>Modelos:</label>
        <input type="text" name="modelo" value="<?php echo $cilios['modelo']; ?>" required>
        <label>Efeito:</label>
        <input type="text" name="efeito" value="<?php echo $cilios['efeito']; ?>" required>
        <label>Cor</label>
        <input type="text" name="cor" value="<?php echo $cilios['cor']; ?>" required>
        <label>Valor</label>
        <input type="text" name="valor" value="<?php echo $cilios['valor']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php">Cancelar</a> <!-- Link para voltar -->
</body>
</html>