<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Alternar</title>
</head>
<body>
    
<div class="container"><?php require_once("./menu.php")?></div>

<?php require_once("./info_view.php");?>

<div class="container">
    <form action="./_conexao/alternarbd.php" method="post" enctype="multipart/form-data">
        <h1>ALTERAR</h1>
        <?php 
        if (isset($_GET["status"])) {
            echo "<div class='msg'>
            Edite alguma informação porfavor!
            </div>";
        }
        ?>
        <input type="hidden" name="id" value="<?=$id;?>">
        <div class="row">
            <div class="col">
                <label class="picture" tabindex="0">
                    <input type="file" accept="img/*" class="picture__input" id="foto" name="foto">
                    <span class="picture__image">
                        <?php require_once("./JS/imagem.php"); ?>
                    </span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome">Nome da Receita</label>
                <input type="text" 
                name="nome"
                id="nome"
                required
                placeholder="Nome da Receita"
                value="<?=$retorno["nome_Receita"];?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="desc" class="area">Descrição</label>
                <textarea name="desc" 
                id="desc" 
                cols="20" 
                rows="5"
                required><?=$retorno["desc_Receita"]; ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="item" class="area">Ingredientes</label>
                <textarea 
                name="item" 
                id="item" 
                cols="30" 
                rows="10"
                required><?=$retorno["item_Receita"];?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="instrucao" class="area">Instruções</label>
                <textarea 
                name="instrucao" 
                id="instrucao" 
                cols="30" 
                rows="10"
                required><?=$retorno["inst_Receita"];?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="tempPreparo">Tempo de Preparo</label>
                <input type="text"
                name="tempPreparo"
                id="tempPreparo"
                placeholder="Tempo de Preparo"
                value="<?=$retorno["tempP_Receita"];?>"
                required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="tempCozimento">Tempo de Cozimento</label>
                <input type="text"
                name="tempCozimento"
                id="tempCozimento"
                placeholder="Tempo de Cozimento"
                value="<?=$retorno["tempC_Receita"];?>"
                required>
            </div>
        </div>
        <script>
            function voltar(){
                window.location.href="info.php?id=<?=$retorno['id_Receita'];?>";
            }
        </script>
        <div class="row">
            <input type="reset" value="VOLTAR" onclick="voltar()">
            <input type="submit" value="SALVAR">
        </div>
    </form>
</div>
</body>
</html>