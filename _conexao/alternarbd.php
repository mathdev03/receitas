<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // pegando os dados vindo do formulário
        $id               = filter_input(INPUT_POST, "id",FILTER_SANITIZE_NUMBER_INT);
        $nome             = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $desc             = filter_input(INPUT_POST, "desc", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $item             = filter_input(INPUT_POST, "item", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $instrucao        = filter_input(INPUT_POST, "instrucao", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $tempPreparo      = filter_input(INPUT_POST, "tempPreparo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $tempCozimento    = filter_input(INPUT_POST, "tempCozimento", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        require_once("./alternarbd_view.php");

        $dados = [];
        $dados[] = $retorno['nome_Receita'];
        $dados[] = $retorno['desc_Receita'];
        $dados[] = $retorno['item_Receita'];
        $dados[] = $retorno['inst_Receita'];
        $dados[] = $retorno['tempP_Receita'];
        $dados[] = $retorno['tempC_Receita'];

        $dadore = [];
        $dadore[] = $nome;
        $dadore[] = $desc;
        $dadore[] = $item;
        $dadore[] = $instrucao;
        $dadore[] = $tempPreparo;
        $dadore[] = $tempCozimento;

        $voltarpagina = true;

        for ($i=0; $i < 6; $i++) { 
            if ($dados[$i] != $dadore[$i]) {
                $voltarpagina = false;
                break;
            }
        }

        if (!$voltarpagina || !empty($_FILES["foto"]["name"])) {
            if (!empty($_FILES["foto"]["name"])) {
                $pasta = "../img/";
    
                $nomeOriginal = str_replace(" ", "_", $_FILES["foto"]["name"]);
    
                $foto = $nomeOriginal;

                try {

                    $comandoSQL = $conexao->prepare("
                    
                    UPDATE tabela_receita SET
                        nome_Receita = :nome,
                        img_Receita = :foto,
                        desc_Receita = :desc,
                        item_Receita = :item,
                        inst_Receita = :instrucao,
                        tempP_Receita = :tempPreparo,
                        tempC_Receita = :tempCozimento
                    WHERE id_Receita = :id
                    ");

                    $comandoSQL->execute(array(
                        ":nome" => $nome,
                        ":foto" => $foto,
                        ":desc" => $desc,
                        ":item" => $item,
                        ":instrucao" => $instrucao,
                        ":tempPreparo" => $tempPreparo,
                        ":tempCozimento" => $tempCozimento,
                        ":id" => $id
                    ));

                    if ($comandoSQL->rowCount() > 0) {
                        if (!empty($_FILES["foto"]["name"])) {
                            move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta.$foto);
                        }

                        header("location:../info.php?id=".$id);
                        exit();
                    } else {
                        echo "Erro na gravação";
                    }

                } catch(PDOException $erro) {
                    echo "Entre em contato com o suporte!";
                }
            } else {

                try {
                    $comandoSQL = $conexao->prepare("
                    
                    UPDATE tabela_receita SET
                        nome_Receita = :nome,
                        desc_Receita = :desc,
                        item_Receita = :item,
                        inst_Receita = :instrucao,
                        tempP_Receita = :tempPreparo,
                        tempC_Receita = :tempCozimento
                    WHERE id_Receita = :id
                    ");

                    $comandoSQL->execute(array(
                        ":nome" => $nome,
                        ":desc" => $desc,
                        ":item" => $item,
                        ":instrucao" => $instrucao,
                        ":tempPreparo" => $tempPreparo,
                        ":tempCozimento" => $tempCozimento,
                        ":id" => $id
                    ));

                    if ($comandoSQL->rowCount() > 0) {

                        header("location:../info.php?id=".$id);
                        exit();
                    } else {
                        echo "Erro na gravação";
                    }

                } catch(PDOException $erro) {
                    echo "Entre em contato com o suporte!";
                }
            }
        } else {
            header("location:../alternar.php?id=".$id."&status=erro-image");
            exit();
        }

    } else {
        echo "Entre em contato com suporte!";
    }