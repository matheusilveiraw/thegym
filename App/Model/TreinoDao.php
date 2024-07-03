<?php 
    namespace App\Model;

    class TreinoDao { 

            public function create(Treino $m) { 
                $sql = 'INSERT INTO treino (nome, exercicio1, exercicio2, exercicio3, exercicio4, exercicio5, exercicio6) VALUES (?, ?, ?, ?, ?, ?, ?)';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $m->getNome());
                $stmt->bindValue(2, $m->getExercicio1());
                $stmt->bindValue(3, $m->getExercicio2());
                $stmt->bindValue(4, $m->getExercicio3());
                $stmt->bindValue(5, $m->getExercicio4());
                $stmt->bindValue(6, $m->getExercicio5());
                $stmt->bindValue(7, $m->getExercicio6());

                if ($stmt->execute()) {
                    header('Location: ../../treino/lista_treino.php?cadastroSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }
            }
    }
?>