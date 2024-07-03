<?php

namespace App\Model;

class Treino {
    private $nome;
    private $exercicio1;
    private $exercicio2;
    private $exercicio3;
    private $exercicio4;
    private $exercicio5;
    private $exercicio6;

    //SETS
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setExercicio1($exercicio1) {
        $this->exercicio1 = $exercicio1;
    }

    public function setExercicio2($exercicio2) {
        $this->exercicio2 = $exercicio2;
    }

    public function setExercicio3($exercicio3) {
        $this->exercicio3 = $exercicio3;
    }

    public function setExercicio4($exercicio4) {
        $this->exercicio4 = $exercicio4;
    }

    public function setExercicio5($exercicio5) {
        $this->exercicio5 = $exercicio5;
    }

    public function setExercicio6($exercicio6) {
        $this->exercicio6 = $exercicio6;
    }

    //GETS
    public function getNome() {
        return $this->nome;
    }

    public function getExercicio1() {
        return $this->exercicio1;
    }

    public function getExercicio2() {
        return $this->exercicio2;
    }

    public function getExercicio3() {
        return $this->exercicio3;
    }

    public function getExercicio4() {
        return $this->exercicio4;
    }

    public function getExercicio5() {
        return $this->exercicio5;
    }

    public function getExercicio6() {
        return $this->exercicio6;
    }
}

?>