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

    <div class="container">
        <form action="./_conexao/cadastrobd.php" method="post" enctype="multipart/form-data">
            <h1>Cadastro</h1>
            <?php 
            if (isset($_GET["status"])) {
                echo "<div class='msg'>
                Insira uma imagem!
                </div>";
            }
            ?>
            <div class="row">
                <div class="col">
                    <label class="picture" tabindex="0">
                        <input type="file" accept="img/*" class="picture__input" id="foto" name="foto">
                        <span class="picture__image">
                            <script src="./JS/imagem.js"></script>
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
                    placeholder="Nome da Receita">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="desc" class="area">Descrição</label>
                    <textarea name="desc" 
                    id="desc" 
                    cols="20" 
                    rows="5"
                    required></textarea>
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
                    required></textarea>
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
                    required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="tempPreparo">Tempo de Preparo</label>
                    <input type="text"
                    name="tempPreparo"
                    id="tempPreparo"
                    placeholder="Tempo de Preparo"
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
                    required>
                </div>
            </div>
            <div class="row">
                <input type="reset" value="VOLTAR" onclick="javascript:window.location.href='index.php'">
                <input type="submit" value="SALVAR">
            </div>
        </form>
    </div>
</body>
</html>