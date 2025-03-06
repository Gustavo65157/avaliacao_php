<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <h2>Informe seus Dados</h2>
        <form method="post">
            <label>Nome:</label>
            <input type="text" name="nome" required><br>
            <label>Idade:</label>
            <input type="number" name="idade" required><br>
            <input type="submit" value="Enviar">
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = htmlspecialchars($_POST["nome"]);
                $idade = (int) $_POST["idade"];
                echo "Olá, $nome! Você tem $idade anos.";
            }
            ?>
        </div>
    </div>
</body>
</html>
