<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Cadastro Receita</title>
</head>
<body>
    <div class="container"><?php require_once("./menu.php")?></div>

    <?php
        require_once("./info_view.php");
    ?>

    <div class="container info__form">
        <form action="" method="post">
            <h1>INFORMAÇÕES</h1>
            <div class="row img">
                <img src="./img/<?=$retorno['img_Receita']; ?>" alt="Perfil" width="600" class="info__img">
            </div>
            <div class="row">
                <div class="col info">
                    <label for="infonome"><?=$retorno['nome_Receita'];?></label>
                </div>
            </div>
            <div class="row">
                <div class="col info">
                    <label for="desc" class="area">Descrição</label>
                    <label for="infodesc"><?=$retorno['desc_Receita'];?></label>
                </div>
            </div>
            <div class="row info__area">
                <div class="col">
                    <label for="item" class="area">Ingredientes</label>
                    <textarea 
                    class="my-textarea"
                    name="instrucao" 
                    id="instrucao" 
                    cols="30" 
                    rows="10"
                    disabled><?=$retorno['item_Receita'];?></textarea>
                </div>
            </div>
            <div class="row info__area">
                <div class="col">
                    <label for="instrucao" class="area">Instruções</label>
                    <textarea 
                    class="my-textarea2"
                    name="instrucao" 
                    id="instrucao" 
                    rows="1"
                    disabled><?=$retorno['inst_Receita'];?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="tempPreparo">Tempo de Preparo:</label>
                    <label for="infotemp"><?=$retorno['tempP_Receita'];?></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="tempCozimento">Tempo de Cozimento:</label>
                    <label for="infoCozimento"><?=$retorno['tempC_Receita'];?></label>
                </div>
            </div>
            <div class="row voltar">
                <input type="reset" value="VOLTAR" onclick="javascript:window.location.href='visualizar.php'">
                <div class="alternar">
                    <a href="excluir.php?id=<?=$retorno['id_Receita'];?>" class="ex">Excluir</a>
                    <a href="alternar.php?id=<?=$retorno['id_Receita'];?>" class="al">Alterar</a>
                </div>
            </div>
        </form>
        <script src="./JS/info_area.js"></script>
    </div>
</body>
</html>
</body>
</html>