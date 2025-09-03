<?php
    $caminho_raiz = "";
    while(count(glob($caminho_raiz."index.php")) == 0) {
        $caminho_raiz = $caminho_raiz."../";
    }

    include_once $caminho_raiz."factory/componentes.php";
    $senha = $_POST["cx_senha"];

    $mensagem = (($senha == "anselmo :D") ? "Bem vindo!" : "Senha incorreta!");
    $destino = (($senha == "anselmo :D") ? "tela_ferramentas_vendedor" : "tela_login_vendedor");
    
    echo '
        <script>
            alert("'.$mensagem.'");
            window.location.href = "'.$caminho_raiz.'link_handler/handler.php?d='.$destino.'";
        </script>
    ';
?>