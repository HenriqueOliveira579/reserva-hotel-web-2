<?php

    class Quarto {
        private $id;
        private $nome;
        private $precoDiaria;

        function __construct($id, $nome, $precoDiaria) {

            $this->id = $id;
            $this->nome = $nome;
            $this->precoDiaria = $precoDiaria;

        }

        public static function getQuartos() {

            return [
                new Quarto(1, "Suite Double Master", 150),
                new Quarto(2, "Suite Família", 180),
                new Quarto(3, "Suite Single", 100)
            ];

        }

        public static function getById($id) {
            foreach (self::getQuartos() as $quarto) {
                if ($quarto->getId() == $id) {
                    return $quarto;
                }
            }

            return null;
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

        public function getId() {
            return $this->id;
        }
 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }
    }