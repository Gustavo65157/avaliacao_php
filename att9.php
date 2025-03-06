<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <h2>Validar E-mail</h2>
        <form method="post">
            <label>E-mail:</label>
            <input type="email" name="email" required><br>
            <input type="submit" value="Validar">
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST["email"];
                echo filter_var($email, FILTER_VALIDATE_EMAIL) ? "E-mail válido." : "E-mail inválido.";
            }
            ?>
        </div>
    </div>
</body>
</html>