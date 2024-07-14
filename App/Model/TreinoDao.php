<?php 
    namespace App\Model;

    class TreinoDao { 

            public function create(Treino $t) { 
                $sql = 'INSERT INTO treino (nome, exercicio1, exercicio2, exercicio3, exercicio4, exercicio5, exercicio6) VALUES (?, ?, ?, ?, ?, ?, ?)';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $t->getNome());
                $stmt->bindValue(2, $t->getExercicio1());
                $stmt->bindValue(3, $t->getExercicio2());
                $stmt->bindValue(4, $t->getExercicio3());
                $stmt->bindValue(5, $t->getExercicio4());
                $stmt->bindValue(6, $t->getExercicio5());
                $stmt->bindValue(7, $t->getExercicio6());

                if ($stmt->execute()) {
                    header('Location: ../../treino/lista_treino.php?cadastroSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }
            }

            public function delete($id) { 
                $sql = 'DELETE FROM treino WHERE id = ?';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $id);
                $stmt-> execute();

                if ($stmt->execute()) {
                    header('Location: ../../treino/lista_treino.php?deleteSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }
            }
            public function update(Treino $t) { 
                $sql = 'UPDATE treino SET nome = ?, exercicio1 = ?, exercicio2 = ?, exercicio3 = ?, exercicio4 = ?, exercicio5 = ?, exercicio6 = ? WHERE id = ?';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $t->getNome());
                $stmt->bindValue(2, $t->getExercicio1());
                $stmt->bindValue(3, $t->getExercicio2());
                $stmt->bindValue(4, $t->getExercicio3());
                $stmt->bindValue(5, $t->getExercicio4());
                $stmt->bindValue(6, $t->getExercicio5());
                $stmt->bindValue(7, $t->getExercicio6());
                $stmt->bindValue(8, $t->getId());


                if ($stmt->execute()) {
                    header('Location: ../../treino/lista_treino.php?attSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }
            }
    }
?>