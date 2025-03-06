<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <h2>Escolha a Data</h2>
        <form method="post">
            <label>Dia:</label>
            <input type="number" name="dia" min="1" max="31" required><br>

            <label>Mês:</label>
            <select name="mes" required>
                <option value="Janeiro">Janeiro</option>
                <option value="Fevereiro">Fevereiro</option>
                <option value="Março">Março</option>
                <option value="Abril">Abril</option>
                <option value="Maio">Maio</option>
                <option value="Junho">Junho</option>
                <option value="Julho">Julho</option>
                <option value="Agosto">Agosto</option>
                <option value="Setembro">Setembro</option>
                <option value="Outubro">Outubro</option>
                <option value="Novembro">Novembro</option>
                <option value="Dezembro">Dezembro</option>
            </select><br>

            <label>Ano:</label>
            <input type="number" name="ano" min="1600" max="500000" required><br>

            <label>Dia da Semana:</label>
            <select name="diaSemana" required>
                <option value="Domingo">Domingo</option>
                <option value="Segunda-feira">Segunda-feira</option>
                <option value="Terça-feira">Terça-feira</option>
                <option value="Quarta-feira">Quarta-feira</option>
                <option value="Quinta-feira">Quinta-feira</option>
                <option value="Sexta-feira">Sexta-feira</option>
                <option value="Sábado">Sábado</option>
            </select><br>

            <input type="submit" value="Gerar Relatório">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dia = $_POST["dia"];
            $mes = $_POST["mes"];
            $ano = $_POST["ano"];
            $diaSemana = $_POST["diaSemana"];

            echo "<div class='resultado'>";
            echo "<h3>Relatório de Data</h3>";
            echo "<p>$diaSemana, $dia de $mes de $ano</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>