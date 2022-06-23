<?php

    require "Quarto.php";

    class Reserva {

        private $cliente;
        private $quarto;
        private $quantidadeDiarias;

        function __construct($cliente, $quarto, $quantidadeDiarias)
        {
            $this->cliente = $cliente;
            $this->quarto = $quarto;
            $this->quantidadeDiarias = $quantidadeDiarias;
        }

        public function getPrecoTotal() {
            return $this->quarto->getPrecoDiaria() * $this->quantidadeDiarias;
        }


        public function getPrecoTotalString() {
            return number_format($this->getPrecoTotal(), 2, ",", ".");
        }

        public function getQuantidadeDiarias()
        {
                return $this->quantidadeDiarias;
        }

        public function setQuantidadeDiarias($quantidadeDiarias)
        {
                $this->quantidadeDiarias = $quantidadeDiarias;

                return $this;
        }

        public function getQuarto()
        {
                return $this->quarto;
        }

        public function setQuarto($quarto)
        {
                $this->quarto = $quarto;

                return $this;
        }
 
        public function getCliente()
        {
                return $this->cliente;
        }

        public function setCliente($cliente)
        {
                $this->cliente = $cliente;

                return $this;
        }
    }