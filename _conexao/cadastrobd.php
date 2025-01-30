<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!empty($_FILES["foto"]["name"])) {
            $pasta = "../img/";

            $nomeOriginal = str_replace(" ", "_", $_FILES["foto"]["name"]);

            $foto = $nomeOriginal;
        } else {
            header("location:./cadastro.php?status=erro-image");
            exit();
        }

        // pegando os dados vindo do formulário
        $nome     = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $desc     = filter_input(INPUT_POST, "desc", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $item     = filter_input(INPUT_POST, "item", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $instrucao     = filter_input(INPUT_POST, "instrucao", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $tempPreparo    = filter_input(INPUT_POST, "tempPreparo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $tempCozimento    = filter_input(INPUT_POST, "tempCozimento", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        try{
            require_once("./_conexao.php");

            $comandoSQL = $conexao->prepare("
            
                INSERT INTO tabela_receita (
                    nome_Receita,
                    img_Receita, 
                    desc_Receita, 
                    item_Receita, 
                    inst_Receita,
                    tempP_Receita,
                    tempC_Receita)
                VALUES (
                    :nome,
                    :foto,
                    :desc,
                    :item,
                    :instrucao,
                    :tempPreparo,
                    :tempCozimento
                )
            ");

            $comandoSQL->execute(array(
                ":nome" => $nome,
                ":foto" => $foto,
                ":desc" => $desc,
                ":item" => $item,
                ":instrucao" => $instrucao,
                ":tempPreparo" => $tempPreparo,
                ":tempCozimento" => $tempCozimento
            ));

            if($comandoSQL->rowCount() > 0) {
                // echo "Inserido com sucesso!";
                if (!empty($_FILES["foto"]["name"])) {
                    move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta.$foto);
                }

                header("location:../visualizar.php");
                exit();
            } else {
                echo "Erro na gravação";
            }
        } catch(PDOException $erro) {
            echo "Entre em contato com o suporte!";
        }
    } else {
        echo "Entre em contato com o suporte";
    }