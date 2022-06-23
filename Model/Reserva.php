<?php

    class Reserva {

        private $cliente;
        private $tipoAcomodacao;
        private $quantidadeDiarias;

        function __construct($cliente, $tipoAcomodacao, $quantidadeDiarias)
        {
            $this->cliente = $cliente;
            $this->tipoAcomodacao = $tipoAcomodacao;
            $this->quantidadeDiarias = $quantidadeDiarias;
        }

        public function getPrecoAcomodacao() {
            switch ($this->tipoAcomodacao) {
                case "Suite Double Master":
                    return 150;
                    break;

                case "Suite Familia":
                    return 180;
                    break;

                case "Suite Single":
                    return 100;
                    break;
            }
        }

        public function getPrecoTotal() {
            return $this->getPrecoAcomodacao() * $this->quantidadeDiarias;
        }

        public function getPrecoTotalString() {
            return number_format($this->getPrecoTotal(), 2, ",", ".");
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

        public function getTipoAcomodacao()
        {
                return $this->tipoAcomodacao;
        }

        public function setTipoAcomodacao($tipoAcomodacao)
        {
                $this->tipoAcomodacao = $tipoAcomodacao;

                return $this;
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
    }