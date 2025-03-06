<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="container">
        <h2>Verificar Idade</h2>
        <form method="post">
            <label>Idade:</label>
            <input type="number" name="idade" required><br>
            <input type="submit" value="Verificar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idade = (int) $_POST["idade"];

            echo "<div class='resultado'>";
            if ($idade >= 60) {
                echo "Você é idoso.";
            } elseif ($idade >= 18) {
                echo "Você é maior de idade.";
            } else {
                echo "Você é menor de idade.";
            }
        }
        ?>
    </div>
</body>
</html>