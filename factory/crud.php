<?php
    include_once "conexao.php";

    class CRUD {
        public static function read($tabela, $colunas, $filtros) {
            $conexao = new Caminho;

            $query = "SELECT ";
            for ($i = 0; $i < count($colunas); $i++) {
                $query = $query.$colunas[$i];

                if ($i != count($colunas) - 1) {
                    $query  = $query.", ";
                }
            }

            $query = $query." FROM ".$tabela;

            if (count($filtros) > 0) {
                $query = $query." WHERE ";
            }

            for ($i = 0; $i < count($filtros); $i++) {
                $filtro = array_keys($filtros)[$i];
                $query = $query.$filtro."=".$filtros[$filtro];

                if ($i < count($filtros) - 1) {
                    $query = $query." AND ";
                }
            }

            $resultado = $conexao->getConn()->prepare($query);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function update($tabela, $colunas, $filtros) {
            $conexao = new Caminho;

            $query = "UPDATE ".$tabela." SET ";
            for ($i = 0; $i < count($colunas); $i++) {
                $coluna = array_keys($colunas)[$i];
                $query = $query.$coluna."=".$colunas[$coluna];

                if ($i < count($colunas) - 1) {
                    $query = $query.", ";
                }
            }

            if (count($filtros) > 0) {
                $query = $query." WHERE ";
            }

            for ($i = 0; $i < count($filtros); $i++) {
                $filtro = array_keys($filtros)[$i];
                $query = $query.$filtro."=".$filtros[$filtro];

                if ($i < count($filtros) - 1) {
                    $query = $query." AND ";
                }
            }

            return $query;
            //$resultado = $conexao->getConn()->prepare($query);
            //$resultado->execute();
        }

        public static function delete($tabela, $filtro) {
            $conexao = new Caminho;
        }
    }
?>