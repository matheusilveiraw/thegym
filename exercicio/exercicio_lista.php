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
            <a class="nav-link" href="exercicio_lista.php"> Exercícios </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compras.php"> --- </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container text-center flex-grow-1 mt-5">
    <div class="row">
        <div class="col"> </div>
        <div class="col-10">
            <h1>Músculos</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Musculo</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                    </tr>
                </thead>

                <?php
                $sql = "SELECT * FROM exercicio";
                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0) {

                    while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $dados['id']; ?></th>
                                <td><?php echo $dados['nome']; ?></td>
                                <td>Músculo</td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="cadastro_musculo.php?id=<?php echo $dados['id'] ?>" role="button"><i data-feather="edit"></i></a>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="../banco_de_dados/musculos/delete_musculos.php?id=<?php echo $dados['id'] ?>" role="button"><i data-feather="trash-2"></i></a>
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
                    </tr>

                <?php
                }

                ?>
            </table>

            <div class="container text-center">
                <a class="btn btn-dark btn-lg col-sm-3 me-2" href="cadastro_musculo.php" role="button">Cadastrar</a>

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