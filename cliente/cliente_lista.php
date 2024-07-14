    <?php

    include_once '../includes/header.php';
    include_once '../banco_de_dados/connect.php';

    ?>
    <a class="navbar-brand" href="../index.php">The Gym</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../musculos/musculos_lista.php">Músculos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../exercicio/exercicio_lista.php"> Exercícios </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../treino/lista_treino.php"> Treinos </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../ficha_treino/ficha_treino_lista.php"> Ficha Treino </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cliente_lista.php"> Clientes </a>
                        </li>
                    </ul>
                </div>
    </div>
</nav>

    <?php
    if (isset($_GET['cadastroSucesso'])) {
    ?>
        <div class="alert alert-success" role="alert">
            Músculo cadastrado com sucesso!
        </div>
    <?php
    }
    if (isset($_GET['attSucesso'])) {
    ?>
        <div class="alert alert-success" role="alert">
            Músculo atualizado com sucesso!
        </div>
    <?php
    }
    if (isset($_GET['deleteSucesso'])) {
    ?>
        <div class="alert alert-success" role="alert">
            Músculo deletado com sucesso!
        </div>
    <?php
    }
    ?>


    <div class="container text-center flex-grow-1 mt-5">
        <div class="row">
            <div class="col"> </div>
            <div class="col-10">
                <h1>Clientes</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Idade</th>
                            <th scope="col">Ficha Treino</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Deletar</th>
                        </tr>
                    </thead>

                    <?php
                    $sql = "SELECT c.id, c.nome, c.cpf, c.idade, 
                            ft.nome AS ficha_treino 
                        FROM `cliente` AS c
                        JOIN ficha_treino AS ft ON c.ficha_treino = ft.id";

                    $resultado = mysqli_query($connect, $sql);

                    if (mysqli_num_rows($resultado) > 0) {

                        while ($dados = mysqli_fetch_array($resultado)) {
                    ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo $dados['id']; ?></th>
                                    <td><?php echo $dados['nome']; ?></td>
                                    <td><?php echo $dados['cpf']; ?></td>
                                    <td><?php echo $dados['idade']; ?></td>
                                    <td><?php echo $dados['ficha_treino']; ?></td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="cliente_cadastro.php?id=<?php echo $dados['id'] ?>" role="button"><i data-feather="edit"></i></a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-sm" href="../banco_de_dados/ficha_treino/delete_ficha_treino.php?id=<?php echo $dados['id'] ?>" role="button"><i data-feather="trash-2"></i></a>
                                    </td>
                                </tr>
                            </tbody>

                        <?php
                        }
                    } else { ?>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>

                    <?php
                    }

                    ?>
                </table>

                <div class="container text-center">
                    <a class="btn btn-dark btn-lg col-sm-3 me-2" href="cliente_cadastro.php" role="button">Cadastrar</a>

                    <a class="btn btn-secondary btn-lg col-sm-3" href="../index.php" role="button">Menu</a>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    <?php
    include_once '../includes/footer.php';
    ?>