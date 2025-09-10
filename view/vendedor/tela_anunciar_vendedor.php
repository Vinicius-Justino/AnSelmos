<?php
    $caminho_raiz = "";
    while(count(glob($caminho_raiz."index.php")) == 0) {
        $caminho_raiz = $caminho_raiz."../";
    }

    include_once $caminho_raiz."factory/componentes.php";
    include_once $caminho_raiz."factory/crud.php";

    $categorias = "[";
    foreach (CRUD::read("tb_categorias", ["nome"], []) as $linha) {
        $categorias = $categorias."'".$linha["nome"]."',";
    }
    $categorias[strlen($categorias) - 1] = "]";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anunciar Produto</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $caminho_raiz?>img/favicon.ico">

    <link rel="stylesheet" href="<?php echo $caminho_raiz?>css/style.css">
    <script src="<?php echo $caminho_raiz?>js/arruma_links.js"></script>
    <script src="<?php echo $caminho_raiz?>js/preview_produto.js"></script>
    <script src="<?php echo $caminho_raiz?>js/lista_categorias.js"></script>
</head>
<body onload="carrega_categorias(<?php echo $categorias?>); arruma_links('<?php echo $caminho_raiz?>'); arruma_imagens('<?php echo $caminho_raiz?>')">
    <?php Componentes::header_vendedor()?>
    <main id="tela-anunciar">
        <div>
            <section>

            </section>
            <section>
                <form action="" method="post">
        
                <label for="imagem">Foto do produto:</label>
                <input type="file" name="cx_imagem" id="imagem" placeholder="Adicione a imagem do produto" required maxlength="90">
                
                <label for="nome">Nome do produto:</label>
                <input type="text" name="cx_nome" id="nome" placeholder="Digite o nome do produto" required maxlength="90"> 
                
                <label for="descricao">Descrição:</label>
                <input type="text" name="cx_descricao" id="descricao" placeholder="Digite a descrição do produto" required maxlength="90">

                <label for="preco">Preço:</label>
                <input type="number" name="cx_preco" id="preco" placeholder="Digite o preço do produto" maxlength="3" required>

                <label for="estoque">Estoque:</label>
                <input type="number" name="cx_estoque" id="estoque" placeholder="Digite quantos produtos estão disponiveis" maxlength="3" value="0" required>

                <label for="categoria">Categoria:</label>
                <select name="cx_categoria" id="lista-categorias">
                    <option value="Adicionar" selected>Nova Categoria</option>
                </select>

                <input type="text" name="cx_categoria_nova" id="input-categoria" placeholder="Informe a nova categoria" maxlength="90" required>
                <span>
                    <label for="oculto">Ocultar produto:</label>
                    <input type="checkbox" id="oculto">
                </span>

                <input type="submit" value="Anunciar agora"></input>
            </form>
            </section>
        </div>
    </main>
</body>
</html>