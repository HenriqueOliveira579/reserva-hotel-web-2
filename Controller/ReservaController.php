<?php

    require "../Model/Cliente.php";
    require "../Model/Reserva.php";

    class ReservaController {
        private $camposObrigatorios = ["nome", "email", "telefone", "rg", "id-quarto", "quantidade-diarias"];
        
        public function main() {

            session_start();

            if (!$this->verificarCampos($this->camposObrigatorios)) {

                $erro = "Faltando campos no formulário";
                $_SESSION["erro"] = $erro;
                header("Location: ../View/erro.php" );
                die;
            }

            $cliente = new Cliente($_POST["nome"], $_POST["email"], $_POST["telefone"], $_POST["rg"]);
            $quarto = Quarto::getById((int)$_POST["id-quarto"]);
            $reserva = new Reserva($cliente, $quarto, $_POST["quantidade-diarias"]);

            $_SESSION["reserva"] = serialize($reserva);

            header("Location: ../View/infos-reserva.php" );

        }

        private function verificarCampos($campos) {
            foreach ($campos as $campo) {
                if (empty($_POST[$campo])) {
                    echo "ERROOO";
                    echo $campo;
                    return false;
                }
            }

            return true;
        }
    
    }

    $controller = new ReservaController();
    $controller->main();