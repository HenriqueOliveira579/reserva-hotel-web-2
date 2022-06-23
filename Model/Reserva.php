<?php

    class Reserva {

        private $cliente;
        private $idAcomodacao;
        private $quantidadeDiarias;

        function __construct($cliente, $idAcomodacao, $quantidadeDiarias)
        {
            $this->cliente = $cliente;
            $this->idAcomodacao = $idAcomodacao;
            $this->quantidadeDiarias = $quantidadeDiarias;
        }

        public function getPrecoAcomodacao() {
            return Acomodacao::getById($this->idAcomodacao)->getPrecoDiaria();
        }

        public function getNomeAcomodacao() {
            return Acomodacao::getById($this->idAcomodacao)->getNome();
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