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
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>

    <!-- implementação da solução -->
     <form action="calculo_tinta_parede.php" method="POST">
        <label for="altura">Insira a altura da parede: </label>
        <input type="number" name="altura" id="altura">
        <br>
        <label for="largura">Insira a largura da parede: </label>
        <input type="number" name="largura" id="largura">
        <input type="submit" value="Calcular área">
     </form>
    </main>
</body>


</html>