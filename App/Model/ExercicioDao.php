<?php 
    namespace App\Model;

    class ExercicioDao { 

            public function create(Exercicio $e) { 
                $sql = 'INSERT INTO exercicio (nome, musculo) VALUES (?, ?)';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $e->getNome());
                $stmt->bindValue(2, $e->getMusculo());

                if ($stmt->execute()) {
                    header('Location: ../../exercicio/exercicio_lista.php?cadastroSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }
            }

            public function update(Exercicio $e) { 
                $sql = 'UPDATE exercicio SET nome = ?, musculo = ? WHERE id = ?';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $e->getNome());
                $stmt->bindValue(2, $e->getMusculo());
                $stmt->bindValue(3, $e->getId());

                $stmt->execute();

                if ($stmt->execute()) {
                    header('Location: ../../exercicio/exercicio_lista.php?atualizaoSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }

            }

            public function delete($id) { 
                $sql = 'DELETE FROM exercicio WHERE id = ?';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $id);
                $stmt-> execute();

                if ($stmt->execute()) {
                    header('Location: ../../exercicio/exercicio_lista.php?deleteSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }
            }
    }
?>