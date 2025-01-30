<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/estilo.css">
    <title>Excluir</title>
</head>
<body>
    <div class="container">
        <?php require_once("./menu.php");?>
    </div>

    <?php require_once("./info_view.php")?>

    <div class="container">
        <div class="mensagemfundo">
            <h1 class="mensagemex">Deseja excluir?<br><br>
            <div class="T"><?=$retorno['nome_Receita'];?></div></h1>
            <div class="bot">
                <a href="./info.php?id=<?=$retorno['id_Receita'];?>" class="voltarex">VOLTAR</a>
                <a href="./_conexao/excluirbd.php?id=<?=$retorno['id_Receita']?>" class="excluirex">EXCLUIR</a>
            </div>
        </div>
    </div>
</body>
</html>