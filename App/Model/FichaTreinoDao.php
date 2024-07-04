<?php

namespace App\Model;

class FichaTreinoDao
{

    public function create(FichaTreino $ft) {
        $sql = 'INSERT INTO ficha_treino (nome, treino1, treino2, treino3, treino4, treino5) VALUES (?, ?, ?, ?, ?, ?)';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ft->getNome());
        $stmt->bindValue(2, $ft->getTreino1());
        $stmt->bindValue(3, $ft->getTreino2());
        $stmt->bindValue(4, $ft->getTreino3());
        $stmt->bindValue(5, $ft->getTreino4());
        $stmt->bindValue(6, $ft->getTreino5());

        if ($stmt->execute()) {
            header('Location: ../../ficha_treino/ficha_treino_lista.php?cadastroSucesso');
        } else {
            print_r($stmt->errorInfo());
        }
    }

    public function delete($id) {
        $sql = 'DELETE FROM ficha_treino WHERE id = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        if ($stmt->execute()) {
            header('Location: ../../ficha_treino/ficha_treino_lista.php?deleteSucesso');
        } else {
            print_r($stmt->errorInfo());
        }
    }

    public function update(FichaTreino $ft) { 
        $sql = 'UPDATE ficha_treino SET nome = ?, treino1 = ?, treino2 = ?, treino3 = ?, treino4 = ?, treino5 = ? WHERE id = ?';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $ft->getNome());
        $stmt->bindValue(2, $ft->getTreino1());
        $stmt->bindValue(3, $ft->getTreino2());
        $stmt->bindValue(4, $ft->getTreino3());
        $stmt->bindValue(5, $ft->getTreino4());
        $stmt->bindValue(6, $ft->getTreino5());
        $stmt->bindValue(7, $ft->getId());

        if ($stmt->execute()) {
            header('Location: ../../ficha_treino/ficha_treino_lista.php?atualizaoSucesso');
        } else {
            print_r($stmt->errorInfo());
        }
    }
}
