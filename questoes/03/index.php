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
        <h2>Questão 03: Horas trabalhadas</h2>
    </header>

    <main>

    <!-- implementação da solução -->
     <form action="salario_do_mes.php" method="POST">
        <label for="valor-hora">Insira quanto você recebe por hora: </label>
        <input type="number" name="valor-hora" id="valor-hora">
        <br>
        <label for="horas-mes">Insira quantas horas você trabalha no mês: </label>
        <input type="number" name="horas-mes" id="horas-mes">
        <input type="submit" value="Calcular">  
     </form>
    </main>
</body>


</html>