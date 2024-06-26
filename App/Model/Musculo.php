<?php 
    namespace App\Model;

    class Musculo { 
        private $id, $nome, $data, $link;

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

        public function getLink() { 
            return $this->link;
        }

        public function setLink($link) { 
            $this->link = $link;
        }

        public function getData() { 
            return $this->data;
        }

        public function setData($data) { 
            $this->data = $data;
        }
    }
?>