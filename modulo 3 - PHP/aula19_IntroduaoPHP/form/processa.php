<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
    <h1>Dados Enviados</h1>
    <form action="Processa.php" method ="Post">
        <?php
            $nome = ($_POST["nome"]);
            $sobrenome = ($_POST['sobrenome']);
            $email = ($_REQUEST['email']);
            $senha = ($_POST["senha"]);

            echo "<p id='butao'>Seu nome é <strong>$nome</strong> </p>";
            echo "<p>Seu sobrenome é <strong>$sobrenome</strong </p>";
            echo "<p>Seu email é <strong>email</strong> </p>";
            echo "<p>Sua senha é <strong>$senha</strong> ;) </p>";
        ?>
    </form>    
</main>
</body>
</html> 