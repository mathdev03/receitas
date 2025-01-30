<?php
    try {
        require_once("./_conexao.php");

        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

        $comandoSQL = $conexao->prepare("
        
        DELETE FROM tabela_receita WHERE id_Receita = :id
        ");

        $comandoSQL->execute(array(":id" => $id));

        if($comandoSQL->rowCount() > 0) {
            // echo "Excluido com sucesso!";
            header("location:../visualizar.php");
            exit();
        } else {
            echo "Erro na exclusão";
        }

    } catch (PDOException $erro) {
        echo "Entre contato com o suporte!";
    }