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
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $caminho_raiz?>img/favicon.ico">

    <link rel="stylesheet" href="<?php echo $caminho_raiz?>css/style.css">
    <script src="<?php echo $caminho_raiz?>js/arruma_links.js"></script>
</head>
<body onload="arruma_links('<?php echo $caminho_raiz?>'); arruma_imagens('<?php echo $caminho_raiz?>')">
    <?php Componentes::header()?>
    <main id="tela-login">
        <div>
            <section style="align-items: flex-start">
                <img src="logo_footer.png" alt="Imagem da logotipo do AnSelmo">
                <h2>Fazer login</h2>
                <p>Ir para o Painel de Controle</p>
            </section>
            <section style="align-items: flex-end">
                <form action="<?php echo $caminho_raiz?>control/login.php" method="post">
                    <input type="password" name="cx_senha" placeholder="Senha"><br>
                    <input type="submit" value="Entrar">
                </form>
            </section>
        </div>
    </main>
    <?php Componentes::footer()?>
</body>
</html>