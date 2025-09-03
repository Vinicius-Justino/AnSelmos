<?php
    $caminho_raiz = "";
    while(count(glob($caminho_raiz."index.php")) == 0) {
        $caminho_raiz = $caminho_raiz."../";
    }

    include_once $caminho_raiz."factory/componentes.php";
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
</head>
<body onload="arruma_links('<?php echo $caminho_raiz?>'); arruma_imagens('<?php echo $caminho_raiz?>')">
    <?php Componentes::header_vendedor()?>
    <main id="tela-anunciar">
        <div>
            <section>
                <form method="POST">
        
                <label for="imagem">Foto do produto:</label>
                <input type="file" id="imagem" placeholder="Adicione a imagem do produto" required>
                
                <label for="nome">Nome do produto:</label>
                <input type="text" id="nome" placeholder="Digite o nome do produto" required>
                
                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" placeholder="Digite a descrição do produto" required>

                <label for="preco">Preço:</label>
                <input type="number" id="preco" placeholder="Digite o preço do produto" maxlength="3" required>

                <label for="estoque">Estoque:</label>
                <input type="number" id="estoque" placeholder="Digite quantos produtos estão disponiveis" maxlength="3" required>

                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" placeholder="Digite a categoria do seu produto" required>
                <span>
                    <label for="oculto">Ocultar produto:</label>
                    <input type="checkbox" id="oculto" required>
                </span>

                <input type="submit" value="Anunciar agora"></input>
            </form>
            </section>
        </div>
    
    </main>
</body>
</html>