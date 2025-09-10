function carrega_categorias(categorias) {
    lista = document.getElementById("lista-categorias");
    lista.addEventListener("change", function() {
        categoria_selecionada = document.querySelector('option:checked').value;
        input_categoria_nova = document.getElementById("input-categoria");

        input_categoria_nova.style.display = (categoria_selecionada == "Adicionar") ? "" : "none";
        input_categoria_nova.value = (categoria_selecionada == "Adicionar") ? "" : "qualquer coisa";
    });

    categorias.forEach(function(categoria) {
        elemento = document.createElement("option");
        elemento.value = categoria;
        elemento.innerText = categoria;

        lista.appendChild(elemento);
    });
}