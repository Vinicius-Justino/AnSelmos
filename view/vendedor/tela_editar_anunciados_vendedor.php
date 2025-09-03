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
    <title>Editar Anunciados</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $caminho_raiz?>img/favicon.ico">

    <link rel="stylesheet" href="<?php echo $caminho_raiz?>css/style.css">
    <script src="<?php echo $caminho_raiz?>js/arruma_links.js"></script>
</head>
<body onload="arruma_links('<?php echo $caminho_raiz?>'); arruma_imagens('<?php echo $caminho_raiz?>')">
    <?php Componentes::header()?>
    <main>

    </main>
    <?php Componentes::footer()?>
</body>
</html>