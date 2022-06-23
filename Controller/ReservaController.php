<?php

    require "../Model/Cliente.php";
    require "../Model/Reserva.php";
    require "../Utils/Utils.php";

    class ReservaController {
        private $camposObrigatorios = ["nome", "email", "telefone", "rg", "id-quarto", "quantidade-diarias"];
        
        public function main() {

            session_start();

            if (!$this->verificarCampos($this->camposObrigatorios)) {

                $this->erro("Faltando Campos no Formulário");
            }

            $cliente = new Cliente($_POST["nome"], $_POST["email"], $_POST["telefone"], $_POST["rg"]);
            $quarto = Quarto::getById($_POST["id-quarto"]);

            if (!$quarto) {
                $this->erro("Quarto não encontrado");
            }

            $reserva = new Reserva($cliente, $quarto, $_POST["quantidade-diarias"]);

            $_SESSION["reserva"] = serialize($reserva);

            header("Location: ../View/infos-reserva.php" );

        }

        private function verificarCampos($campos) {
            foreach ($campos as $campo) {
                if (empty($_POST[$campo])) {
                    return false;
                }
            }

            return true;
        }
    }

    $controller = new ReservaController();
    $controller->main();