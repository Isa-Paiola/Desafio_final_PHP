<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Final de PHP</title>
</head>
<body>
    <div class="fundo">
        <form action="store.php" method="POST">
            <h1>Gerenciamento Extensão de Cílios</h1>
            <label>Modelos:</label>
            <input type="text" name="modelo" required>
            <p>Efeito:</p>
             <select name="efeito">
                <option value="Boneca">Boneca</option>
                <option value="Esquilo">Esquilo</option>
                <option value="Gatinho">Gatinho</option>
             </select>
             <p>Cor:</p>
                <select name="cor">
                    <option value="Black">Black</option>
                     <option value="Brown">Brown</option>
                </select>
            <label>Valor:</label>
                <input type="number" name="valor" required>
                 <input type="submit" value="Agendar Cílios" id="botao">

            <br>
            <br>

            <h2 id="tabela">Lista de Agendamento</h2>

            <br>
    
            <div id="tabela">
            <?php include 'read.php' ?>
            </div>
    </div>
        </form>

</body>
</html>