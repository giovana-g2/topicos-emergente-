<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Juros Simples</title>
</head>
<body>
    <h2>Calculadora de Juros Simples</h2>
    <form method="post">
        Dívida: <input type="number" name="divida" step="0.01" required><br><br>
        Juros (% a.m.): <input type="number" name="juros" step="0.01" required><br><br>
        Parcelas: <input type="number" name="parcelas" required><br><br>
        <input type="submit" name="calcular" value="Processar">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $divida = $_POST['divida'];
        $juros = $_POST['juros'];
        $parcelas = $_POST['parcelas'];

        
        if ($divida <= 0 || $juros < 0 || $parcelas <= 0) {
            echo "Por favor, insira valores válidos (positivos).";
        } else {

            $montante = $divida + ($divida * ($juros / 100) * $parcelas);
            $valor_parcela = $montante / $parcelas;

            echo "<h3>Resultado:</h3>";
            echo "Valor total com juros: R$ " . number_format($montante, 2, ',', '.') . "<br>";
            echo "Valor de cada parcela: R$ " . number_format($valor_parcela, 2, ',', '.') . "<br><br>";

            echo "<table border='1' cellpadding='5'>";
            echo "<tr><th>Parcela</th><th>Valor da Parcela</th><th>Valor Total com Juros</th></tr>";
            for ($i = 1; $i <= $parcelas; $i++) {
                echo "<tr><td>$i</td><td>R$ " . number_format($valor_parcela, 2, ',', '.') . "</td><td>R$ " . number_format($montante, 2, ',', '.') . "</td></tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>
