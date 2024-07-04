<?php 
    namespace App\Model;

    class FichaTreino { 
        private $id, $nome, $treino1, $treino2, $treino3, $treino4, $treino5;

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

        public function getTreino1() { 
            return $this->treino1;
        }

        public function setTreino1($treino1) { 
            $this->treino1 = $treino1;
        }

        public function getTreino2() { 
            return $this->treino2;
        }

        public function setTreino2($treino2) { 
            $this->treino2 = $treino2;
        }

        public function getTreino3() { 
            return $this->treino3;
        }

        public function setTreino3($treino3) { 
            $this->treino3 = $treino3;
        }

        public function getTreino4() { 
            return $this->treino4;
        }

        public function setTreino4($treino4) { 
            $this->treino4 = $treino4;
        }

        public function getTreino5() { 
            return $this->treino5;
        }

        public function setTreino5($treino5) { 
            $this->treino5 = $treino5;
        }
    }
?>