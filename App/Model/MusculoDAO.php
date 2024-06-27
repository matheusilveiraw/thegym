<?php 
    namespace App\Model;

    class MusculoDao { 

            public function create(Musculo $m) { 
                $sql = 'INSERT INTO musculo (nome, link, data) VALUES (?, ?, ?)';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $m->getNome());
                $stmt->bindValue(2, $m->getLink());
                $stmt->bindValue(3, $m->getData());

                if ($stmt->execute()) {
                    header('Location: ../../musculos/musculos_lista.php?cadastroSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }
            }

            public function update(Musculo $m) { 
                $sql = 'UPDATE musculo SET nome = ?, link = ? WHERE id = ?';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $m->getNome());
                $stmt->bindValue(2, $m->getLink());
                $stmt->bindValue(3, $m->getId());

                $stmt->execute();

                if ($stmt->execute()) {
                    header('Location: ../../musculos/musculos_lista.php?atualizaoSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }

            }

            public function delete($id) { 
                $sql = 'DELETE FROM musculo WHERE id = ?';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $id);
                $stmt-> execute();

                if ($stmt->execute()) {
                    header('Location: ../../musculos/musculos_lista.php?deleteSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }
            }
    }
?>