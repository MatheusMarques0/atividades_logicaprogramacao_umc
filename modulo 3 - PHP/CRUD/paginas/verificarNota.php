<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Nota</title>
    <link rel="stylesheet" href="../estilos/styleVerificar.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="Cadastro.php">Cadastrar Usuário</a></li>
                <li><a href="verificarUsuario.php">Procurar Usuário</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="containerSection">
            <form action="verificarNota.php" method="post">
                <select name="curso" id="curso" class="estilo">
                    <option value="ads">Análise e Desenvolvimento de Sistemas</option>
                    <option value="es">Engenharia de Software</option>
                    <option value="si">Sistema da Informação</option>
                    <option value="cc">Ciência da Computação</option>
                </select>
                <input type="submit" value="Buscar">
            </form>
        </section>

        <section>

        <?php
            if(isset($_POST['curso'])){
                include("../conexao/conexao.php");
                $curso = $_POST["curso"];
                //Prepara a consulta sql
                $sql = "SELECT * FROM usuarios WHERE curso =?";
                $stmt = $conn->prepare($sql);

                $cursos = [
                    "ads" => "ANÁLISE E DESENVOLVIMENTO DE SISTEMAS" ,
                    "es" => "ENGENHARIA DE SOFTWARE" ,
                    "si" => " SISTEMAS DA INFORMAÇÃO" ,
                    "cc" => "CIÊNCIAS DA COMPUTAÇÃO"
                ];

                $nomeCurso = $cursos[$curso];

                if ($stmt) {
                    $stmt->bind_param("s", $curso);
                    $stmt->execute();
                    //Resultado
                    $resultado = $stmt->get_result();

                    if ($resultado->num_rows > 0){
                        echo " <h1 style='text-align:center;'>$nomeCurso</h1>
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOME</th>
                                        <th>Sobrenome</th>
                                        <th>Nota Atividade</th>
                                        <th>Nota Prova</th>
                                        <th>Nota Final</th>
                                    </tr>
                                </thead>
                                <tbody>
                            ";
                     while ($row = $resultado->fetch_assoc()) { //transofrma em array associativo
                        echo "
                        <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['nome']}</td>
                            <td>{$row['sobrenome']}</td>
                            <td>{$row['nota_atividade']}</td>
                            <td>{$row['nota_prova']}</td>
                            <td>{$row['nota_final']}</td>
                         </tr>";
                    } echo "
                    </tbody>
                </table>";
                }
                }
            }
        
        ?>

        </section>
</body>
</html>