<?php

try {
    require_once("./_conexao.php");

    $comandoSQL = $conexao->prepare("

        SELECT * FROM tabela_receita WHERE id_Receita = :id

    ");

    $comandoSQL->execute(array(
        ":id" => $id
    ));

    $retorno = $comandoSQL->fetch();
    
}catch(PDOException $erro) {
    echo "Entre em contato com o suporte!";
}