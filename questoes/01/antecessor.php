    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercícios PHP</title>
        <link rel="stylesheet" href="./../../styles.css">
    </head>
    <body>
        <header>
            <h2>Questão 1: Antecessor de um Valor</h2>
        </header>
        <main>
            <?php
                $numero = $_POST["numero"];
                $antecessor = $numero - 1;
                echo "O número antecessor a $numero é: $antecessor";
            ?>
        </main>
    </body>
    </html>