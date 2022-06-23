<?php

    class Acomodacao {
        private $id;
        private $nome;
        private $precoDiaria;

        function __construct($id, $nome, $precoDiaria) {

            $this->id = $id;
            $this->nome = $nome;
            $this->precoDiaria = $precoDiaria;

        }

        public function getAcomodacoes() {

            return [
                new Acomodacao(1, "Suite Double Master", 150),
                new Acomodacao(2, "Suite Família", 180),
                new Acomodacao(3, "Suite Single", 100)
            ];

        }

        public function getById($id) {
            foreach (self::getAcomodacoes() as $acomodacao) {
                if ($quarto.getId() == $id) {
                    return $quarto;
                }

                return null;
            }
        }

        public function getPrecoDiaria()
        {
                return $this->precoDiaria;
        }

        public function setPrecoDiaria($precoDiaria)
        {
                $this->precoDiaria = $precoDiaria;

                return $this;
        }

        public function getNome()
        {
                return $this->nome;
        }

        function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getId()
        {
                return $this->id;
        }
 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }