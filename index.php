<?php
    $caminho_raiz = "";
    while(count(glob($caminho_raiz."index.php")) == 0) {
        $caminho_raiz = $caminho_raiz."../";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- importar css e js assim -->
    <link rel="stylesheet" href="<?php echo $caminho_raiz?>css/style.css">
    <script src="<?php echo $caminho_raiz?>js/arruma_links.js"></script>
</head>
<body onload="arruma_links('<?php echo $caminho_raiz?>'); arruma_imagens('<?php echo $caminho_raiz?>')">
    <!-- fazer links internos assim -->
    <!--<a href="teste">para "teste.php"</a>-->
    <header>
        <navbar>
            <img src="logo_header_icon.svg" alt="Imagem da logotipo do AnSelmo's">
            <ul>
                <li>
                    <a href="lista_categoria_produtos">Cardapio</a>
                </li>
                <li>
                    <a href="carrinho">Meus pedidos</a>
                </li>
                <li>
                    <a href="tela_login_vendedor">Login</a>
                </li>
            </ul>
        </navbar>
    </header>
    <main>
    <img src="banner.png" alt="Imagem da logotipo do AnSelmo's">
        <h2>
            Dê uma olhada no cardápio!
        </h2>
        <a href="lista_categoria_produtos">Clique aqui!</a>
    </main>
    <footer>
        <div>
            <navbar>
                <img src="logo_footer.png" alt="Imagem de um lanche em uma moto para ser entregue">
                <p>Autores: Vinicius</p>
        </navbar>
        </div>

        <div>
            <img src="background_footer.png" alt="Imagem de um lanche em uma moto para ser entregue">
        </div>
    </footer>
</body>
</html>