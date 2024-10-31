<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
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
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    margin-bottom: 5px;
}

input[type="number"] {
    width: 100px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

p {
    margin-top: 20px;
}
    </style>

</head>
<body>
    <div class="container">
        <h1>Calculadora de IMC</h1>
        <form action="calcularIMC.php" method="POST">
            <label for="peso">Peso (kg):</label>
            <input type="text" id="peso" name="peso" required><br><br>
            <label for="altura">Altura (m):</label>
            <input type="text" id="altura" name="altura" required><br><br>
            <input type="submit" value="Calcular IMC">
        </form>
    </div>
</body>
</html>