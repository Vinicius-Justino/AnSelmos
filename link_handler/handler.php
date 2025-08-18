<?php
    $destino = $_GET["d"];

    $profundidade = "../";
    while (count(glob($profundidade.$destino.".{html,php}", \GLOB_BRACE)) == 0) {
        $profundidade = $profundidade."*/";
    }

    $caminho = glob($profundidade.$destino.".{html,php}", \GLOB_BRACE)[0];
    echo "
        <script>
            window.location.href = '".$caminho."';
        </script>
    ";
?>