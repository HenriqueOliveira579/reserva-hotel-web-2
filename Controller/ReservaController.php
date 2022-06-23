<?php

    require "../Model/Cliente.php";
    require "../Model/Reserva.php";

    class ReservaController {
        private $camposObrigatorios = ["nome", "email", "telefone", "rg", "tipo-acomodacao", "quantidade-diarias"];
        
        public function main() {

            session_start();

            if (!$this->verificarCampos($this->camposObrigatorios)) {

                $erro = "Faltando campos no formulário";
                $_SESSION["erro"] = $erro;
                header("Location: ../View/erro.php" );
                die;
            }

            $cliente = new Cliente($_POST["nome"], $_POST["email"], $_POST["telefone"], $_POST["rg"]);
            $reserva = new Reserva($cliente, $_POST["tipo-acomodacao"], $_POST["quantidade-diarias"]);

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