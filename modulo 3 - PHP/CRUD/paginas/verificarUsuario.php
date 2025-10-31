<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Usuários</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="#">Procurar Usuário</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="containerSection">
            <form action="verificarUsuario.php" method="post">
                <input type="email" name="email" id="email" placeholder="informe o seu E-mail">
                <input type="submit" value="Buscar">
            </form>
        </section>

        <section>
            <?php
            
                if(isset($_POST["email"])){ //verificar se a variavel POST esta vazia
                    include("../conexao/conexao.php"); //fazer a conexão com o banco de dados pelo arquivo conexao
                    $email = $_POST["email"];

                    $sql = "SELECT * FROM usuarios WHERE email = ?"; // fazendo a consulta no sql
                    $stmt = $conn->prepare($sql); // fazendo a coneão com o banco e preparando a consulta sql

                    if ($stmt){ //verifica se a consulta deu certo
                        $stmt->bind_param("s", $email);
                        $stmt->execute();
                        $resultado = $stmt->get_result();  //ver se chegou alguma coisa
                        if ($resultado->num_rows > 0){ //identificar se teve o retorno de pelo menos uma linha
                            $row = $resultado->fetch_assoc(); // converte para um array, fetch serve só para transformar em array
                            echo "
                            <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['nome']}</td>
            <td>{$row['sobrenome']}</td>
            <td>{$row['email']}</td>
            <td>
                <form action='excluirCadastro.php' method='post'>
                    <input type='hidden' name='id' value='{$row['id']}'>
                    <input type='submit' id='btn-excluir' value='&#x1f5d1'>
                </form>
            </td>
        </tr>
    </tbody>
</table>
                            ";
                        } else{
                            echo "<div class='mensagem erro'>E-mail $email não encontrado</div>";
                        }
                    }
                }
            ?>
        </section>

    </main>

</body>
</html>