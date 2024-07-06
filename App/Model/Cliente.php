<?php 
    namespace App\Model;

    class Cliente { 
        private $id, $nome, $idade, $cpf, $fichaTreino;

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

        public function getIdade() { 
            return $this->idade;
        }

        public function setIdade($idade) { 
            $this->idade = $idade;
        }
    
        public function getCpf() { 
            return $this->cpf;
        }

        public function setCpf($cpf) { 
            $this->cpf = $cpf;
        }

        public function getFichaTreino() { 
            return $this->fichaTreino;
        }

        public function setFichaTreino($fichaTreino) { 
            $this->fichaTreino = $fichaTreino;
        }
    }
?>