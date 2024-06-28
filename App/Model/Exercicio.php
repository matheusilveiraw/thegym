<?php 
    namespace App\Model;

    class Exercicio { 
        private $id, $nome, $musculo;

        public function getId() { 
            return $this->id;
        }

        public function setId($id) { 
            $this->id = $id;
        }

        public function getNome() { 
            return $this->nome;
        }

        public function setNome($nome) { 
            $this->nome = $nome;
        }

        public function getMusculo() { 
            return $this->musculo;
        }

        public function setMusculo($Musculo) { 
            $this->musculo = $Musculo;
        }
    }
?>