<?php

    if(isset($_POST["id"])){ //isset verifica se a variavel esta vazia ou não
        
        //Conexão com o banco de dados
        include("../conexao/conexao.php"); 

        //Criar a variável do ID
        $id = $_POST["id"];

        //prepara a consulta SQL para excluir cadastro
        $sql = "DELETE FROM usuarios WHERE ID = ?";
        $stmt = $conn->prepare($sql); //prepara a conexão para sql

        if ($stmt){
            $stmt->bind_param("i", $id);
            //Executa a querry
            $stmt->execute();

            //Direciona você para a página expecificada
            header("Location: verificarUsuario.php")/
            //Encerra a consulta
            $stmt->close();
        } else{
            //Mensagem de erro
            echo "<div class='mensagem erro'>Erro na consulta</div>";
        }
        //Encerra a conexão com o banco de dados
        $conn->close();

    }

?>