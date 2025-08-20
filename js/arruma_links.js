NOME_SITE = "AnSelmos";

function arruma_links(caminho_raiz) {
    document.querySelectorAll("a").forEach(function(tag) {
        destino = "";
        for (let caracter of tag.href) {
            if (caracter == "/") {
                destino = "";
            } else {
                destino += caracter;
            }
        }

        tag.href = `${caminho_raiz}link_handler/handler.php?d=${destino}`;
    });
}

function arruma_imagens(caminho_raiz) {
    document.querySelectorAll("img").forEach(function(tag) {
        caminho_foto = "";
        pulou_inicio = false;
        for (let caracter of tag.src) {
            if (caracter == "/" && !pulou_inicio) {
                pulou_inicio = (caminho_foto == NOME_SITE);
                caminho_foto = "";
            } else {
                caminho_foto += caracter;
            }
        }

        tag.src = caminho_raiz + "img/" + caminho_foto;
    });
}