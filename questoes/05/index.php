<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

    <main>

    <!-- implementação da solução -->
        <form action="maior_numero.php" method="POST">
            <label for="numero1">Insira o número 1: </label>
            <input type="number" name="numero1" id="numero1">
            <br>
            <label for="numero2">Insira o número 2: </label>
            <input type="number" name="numero2" id="numero2">
            <br>
            <label for="numero3">Insira o número 3: </label>
            <input type="number" name="numero3" id="numero3">
            <input type="submit" value="Calcular o Maior">
        </form>
    </main>
</body>


</html>