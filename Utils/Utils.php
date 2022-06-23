<?php

    class Utils {
        public static function erro($mensagem) {
            $_SESSION["erro"] = $mensagem;
            header("Location: ../View/erro.php" );
            die;
        }
    }