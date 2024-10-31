<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    <link rel="stylesheet" href="style.css">

    <style>
body {
    font-family: sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f4f4f4;
}

.container {
    background-color: #A5FFC9;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    color: #333;
}

    </style>

</head>
<body>
<div class="container">
        <h2>Resultado do IMC</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            if (is_numeric($peso) && is_numeric($altura)) {
                $imc = $peso / ($altura * $altura);
                $imc = number_format($imc, 2);

                echo "<div class='result'>Seu IMC é: $imc</div><br>";

                if ($imc < 17) {
                    echo "<div class='result'>Muito abaixo do peso</div>";
                } elseif ($imc >= 17 && $imc <= 18.49) {
                    echo "<div class='result'>Abaixo do peso</div>";
                } elseif ($imc >= 18.5 && $imc <= 24.99) {
                    echo "<div class='result'>Peso normal</div>";
                } elseif ($imc >= 25 && $imc <= 29.99) {
                    echo "<div class='result'>Acima do peso</div>";
                } elseif ($imc >= 30 && $imc <= 34.99) {
                    echo "<div class='result'>Obesidade grau I</div>";
                } elseif ($imc >= 35 && $imc <= 39.99) {
                    echo "<div class='result'>Obesidade grau II (severa)</div>";
                } else {
                    echo "<div class='result'>Obesidade grau III (mórbida)</div>";
                }
            } else {
                echo "<div class='result'>Por favor, insira valores numéricos válidos.</div>";
            }
        }
        ?>
    </div>
</body>
</html>