<?php
    class Componentes {
        public static function header() {
            echo '
            <header>
                <navbar>
                    <a href="index" id="logo-header"><img src="logo.png" alt="Imagem da logotipo do AnSelmo\'s"></a>
                    <ul>
                        <li>
                            <a href="lista_categoria_produtos">Cardápio</a>
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
            ';
        }

        public static function footer() {
            echo '
            <footer>
                <div>
                    <navbar>
                        <img src="logo_footer.png" alt="Imagem de um lanche em uma moto para ser entregue">
                        <p>Autores: Vinicius Justino Cardoso, Iury Paulo do Nascimento Passos, João Victor Saraiva da Silva </p>
                    </navbar>
                </div>

                <div>
                    <img src="background_footer.png" alt="Imagem de um lanche em uma moto para ser entregue">
                </div>
            </footer>
            ';
        }

        public static function header_vendedor() {
            echo '
            <header>
                <navbar>
                    <a href="tela_ferramentas_vendedor" id="logo-header"><img style="border-radius: 50%" src="anselmo.jpeg" alt="Anselmo"></a>
                    <ul>
                        <li>
                            <a href="lista_anunciados_vendedor">Catálogo</a>
                        </li>
                        <li>
                            <a href="tela_anunciar_vendedor">Novo Produto</a>
                        </li>
                        <li>
                            <a href="index">Logout</a>
                        </li>
                    </ul>
                </navbar>
            </header>
            ';
        }
    }
?>