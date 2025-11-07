<?php

    include("../conexao/conexao.php"); // conecta com o DB
    if (isset($_POST["nota_atividade"]) && isset($_POST["nota_prova"])){

        foreach ($_POST["nota_atividade"] as $id => $nota_atividade) {
            $nota_prova = $_POST["nota_prova"][$id];
            $nota_final = $nota_atividade * 0.3 + $nota_prova * 0.7;

            // Preparando a consulta no banco de dados
            $sql = "UPDATE usuarios SET
            nota_atividade = ?,
            nota_prova = ?,
            nota_final = ?
            WHERE id = ?";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("dddi", $nota_atividade, $nota_prova, $nota_final, $id); // d = double,  é um tipo de dado de ponto flutuante de dupla precisão que armazena números reais (com decimais) com uma grande amplitude e precisão, geralmente com cerca de 15 dígitos decimais
            $stmt->execute();
        } //foreach ($variable as $key => $value)
    } header ("location: atualizarNota.php");
?>