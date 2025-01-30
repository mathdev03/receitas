<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/estilo.css">
    <title>VISUALIZAÇÃO</title>
</head>
<body>
    <div class="container">
        <?php require_once("menu.php");?>
    </div>
    <div class="main">
        <div class="container v">
            <?php
            // Conectando com o arquivo de visualização dos dados
            require_once("./_conexao/visualizacaobd.php");
            $total = count($dados);
            $itens = 3;
            $a = 0;
            while($a < $total){
            ?>
            <div class="block">
                <?php
                    for ($i=0; $i < $itens; $i++) {
                        if ($a < $total) {
                ?>
                <div class="card">
                <div class="v__infoimg">
                    <img src="img/<?=$dados[$a]["img_Receita"]?>" alt="Foto Receita">
                </div>
                    <div class="v__info">
                        <h1><?=$dados[$a]["nome_Receita"]?></h1>
                        <a href="./info.php?id=<?=$dados[$a]['id_Receita']; ?>">
                        VER INFORMAÇÕES
                        </a>
                    </div>
                </div>
                <?php
                            $a++;
                        }
                    }
                ?>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>