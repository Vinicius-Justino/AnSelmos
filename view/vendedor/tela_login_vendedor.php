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
<body onload="arruma_links(); arruma_imagens();" id="telaLoginVendedor">
    <!-- fazer links internos assim -->
    
        <form action="" method="post">
            <label>Coloque o nome do seu usuário: </label><br/>
            <input type="text" name=""/><br/>
            <label>Digite sua senha: </label><br/>
            <input type="password" name="" /><br/>
            <input type="submit" value="Entrar">
            <a href="index">Voltar</a>
        </form>
    
</body>
</html>