<?php
include __DIR__ . '/Alunno.php';

class Classe{
    protected $alunni = [];
    protected $nome;

    public function __construct(){
        $alunno1 = new Alunno("Dario", "Tino", 18);
        $alunno2 = new Alunno("Pino", "Rosso", 20);
        $alunno3 = new Alunno("Clio", "Nero", 12);
        array_push($this->alunni, $alunno1);
        array_push($this->alunni, $alunno2);
        array_push($this->alunni, $alunno3);

        $this->nome = "5b";
    }

    public function getArray(){
        return $this->alunni;
    }

    public function getNome(){
        return $this->nome;
    }
}


?>