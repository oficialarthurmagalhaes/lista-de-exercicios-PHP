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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>

    <!-- implementação da solução -->
     <form action="dias_de_vida.php" method="POST">
        <label for="nome">Insira seu nome: </label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="idade">Insira sua idade: </label>
        <input type="number" name="idade" id="idade">
        <input type="submit" value="Calcular dias de vida">
     </form>
    </main>
</body>


</html>