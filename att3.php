<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Substituir Números</h2>
        <form method="post">
            <input type="submit" value="Gerar Números">
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                for ($i = 1; $i <= 100; $i++) {
                    if ($i % 3 == 0 && $i % 5 == 0) {
                        echo "AB ";
                    } elseif ($i % 3 == 0) {
                        echo "A ";
                    } elseif ($i % 5 == 0) {
                        echo "B ";
                    } else {
                        echo "$i ";
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>








