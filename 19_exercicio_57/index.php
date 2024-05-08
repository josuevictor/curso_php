<?php

    class Cachorro{

        private $raca;
        private $nome;

        public function __construct($raca, $nome)
        {
            $this->raca = $raca;
            $this->nome = $nome;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getRaca()
        {
            return $this->raca;
        }



    }

    $nina = new Cachorro('salsicha', 'Nina');

    echo $nina->getRaca();
    echo $nina->getNome();

