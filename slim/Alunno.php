<?php
    class Alunno{
        protected $nome;
        protected $cognome;
        protected $eta;

        public function __construct($nome, $cognome, $eta){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getCognome(){
            return $this->cognome;
        }

        public function getEta(){
            return $this->cognome;
        }

        public function setNome(){
            return $this->nome = $nome;
        }

        public function setCognome(){
            return $this->cognome = $cognome;
        }

        public function setEta(){
            return $this->eta = $eta;
        }
        public function __toString(){
            return $this->nome . " " .  $this->cognome . " " .  $this->eta;
        }

    }


?>