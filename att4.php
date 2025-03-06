<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <h2>Área do Retângulo</h2>
        <form method="post">
            <label>Comprimento:</label>
            <input type="number" name="comprimento" required><br>
            <label>Largura:</label>
            <input type="number" name="largura" required><br>
            <input type="submit" value="Calcular Área">
        </form>

        <?php
        function calcular_area($comprimento, $largura) {
            return $comprimento * $largura;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $comprimento = (float) $_POST["comprimento"];
            $largura = (float) $_POST["largura"];
            echo "<div class='resultado'>Área: " . calcular_area($comprimento, $largura) . " m²</div>";
        }
        ?>
    </div>
</body>
</html>