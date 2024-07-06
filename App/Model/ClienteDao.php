<?php 
    namespace App\Model;

    class ClienteDao { 
            public function create(Cliente $e) { 
                $sql = 'INSERT INTO cliente (nome, idade, cpf, ficha_treino) VALUES (?, ?, ?, ?)';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $e->getNome());
                $stmt->bindValue(2, $e->getIdade());
                $stmt->bindValue(3, $e->getCpf());
                $stmt->bindValue(4, $e->getFichaTreino());

                if ($stmt->execute()) {
                    header('Location: ../../cliente/cliente_lista.php?cadastroSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }
            }

            public function delete($id) { 
                $sql = 'DELETE FROM cliente WHERE id = ?';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $id);
                $stmt-> execute();

                if ($stmt->execute()) {
                    header('Location: ../../cliente/cliente_lista.php?deleteSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }
            }

            public function update(Cliente $m) { 
                $sql = 'UPDATE cliente SET nome = ?, idade = ?, cpf = ?, ficha_treino = ? WHERE id = ?';

                $stmt = Conexao::getConn()->prepare($sql);
                $stmt->bindValue(1, $m->getNome());
                $stmt->bindValue(2, $m->getIdade());
                $stmt->bindValue(3, $m->getCpf());
                $stmt->bindValue(4, $m->getFichaTreino());
                $stmt->bindValue(5, $m->getId());

                $stmt->execute();

                if ($stmt->execute()) {
                    header('Location: ../../cliente/cliente_lista.php?atualizaoSucesso');
                } else {
                    print_r($stmt->errorInfo());
                }
            }
    }
?>