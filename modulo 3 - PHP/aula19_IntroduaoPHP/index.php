<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução PHP</title>
</head>
<body>
    <h1>
        <?php 
            echo "Hello World";
        ?>

        <h2>Variáveis em PHP</h2>
        <p>
            <?php 
                echo "Koala Smoke";
                $nome = "Matheus";

                echo "<br>Nome: $nome<br>"
            ?>

            <h2>Constantes em PHP</h2>

            <p>
                <?php
                    const faculdade = "UMC";
                    const cidade = "Mogi das Cruzes";
                    echo "Faculdade: " . faculdade;  
                    echo "<br> Cidade:" . cidade . "</br>";
                ?>
            </p>
        </p>
    </h1>
</body>
</html>