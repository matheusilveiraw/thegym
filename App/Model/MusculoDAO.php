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

            public function read() { 

                // $sql = 'SELECT * FROM produto';

                // $stmt = Conexao::getConn()->prepare($sql);
                // $stmt->execute();

                // if($stmt->rowCount() > 0) { 
                //     $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                //     return $resultado;
                // } else { 
                //     return [];
                // }
            }

            public function update(Musculo $m) { 
                // $sql = 'UPDATE produto SET nome = ?, descricao = ? WHERE id = ?';

                // $stmt = Conexao::getConn()->prepare($sql);
                // $stmt->bindValue(1, $p->getNome());
                // $stmt->bindValue(2, $p->getDescricao());
                // $stmt->bindValue(3, $p->getId());

                // $stmt->execute();

            }

            public function delete($id) { 
            //     $sql = 'DELETE FROM produto WHERE id = ?';

            //     $stmt = Conexao::getConn()->prepare($sql);
            //     $stmt->bindValue(1, $id);
            //     $stmt-> execute();
            }
    }
?>