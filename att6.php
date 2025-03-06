<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <form method="post">
            <label>Digite uma palavra:</label>
            <input type="text" name="palavra" required><br>
            <input type="submit" value="Remover">
        </form>

        <div class="resultado">
            <?php
            function remover_vogais($string) {
                return str_replace(["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"], "", $string);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $palavra = $_POST["palavra"];
                echo "Sem vogais: " . remover_vogais($palavra);
            }
            ?>
        </div>
    </div>
</body>
</html>