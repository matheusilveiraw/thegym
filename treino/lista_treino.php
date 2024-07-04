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
            <a class="nav-link" href="lista_treino.php"> Treinos </a>
          </li>
        </ul>
      </div>
</div>
</nav>

<div class="container text-center flex-grow-1 mt-5">
  <div class="row">
    <div class="col"> </div>
    <div class="col-10">
      <h1>Treinos</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Exércicio 1</th>
            <th scope="col">Exércicio 2</th>
            <th scope="col">Exércicio 3</th>
            <th scope="col">Exércicio 4</th>
            <th scope="col">Exércicio 5</th>
            <th scope="col">Exércicio 6</th>
            <th scope="col">Editar</th>
            <th scope="col">Deletar</th>
          </tr>
        </thead>

        <?php
        $sql = "SELECT t.id, 
                        t.nome, 
                        e1.nome AS exercicio1,
                        e2.nome AS exercicio2,
                        e3.nome AS exercicio3,
                        e4.nome AS exercicio4,
                        e5.nome AS exercicio5,
                        e6.nome AS exercicio6
                FROM treino AS t
                INNER JOIN exercicio AS e1 ON t.exercicio1 = e1.id
                INNER JOIN exercicio AS e2 ON t.exercicio2 = e2.id
                INNER JOIN exercicio AS e3 ON t.exercicio3 = e3.id
                INNER JOIN exercicio AS e4 ON t.exercicio4 = e4.id
                INNER JOIN exercicio AS e5 ON t.exercicio5 = e5.id
                INNER JOIN exercicio AS e6 ON t.exercicio6 = e6.id;";

        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0) {

          while ($dados = mysqli_fetch_array($resultado)) {
        ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $dados['id']; ?></th>
                <td><?php echo $dados['nome']; ?></td>
                <td><?php echo $dados['exercicio1']; ?></td>
                </td>
                <td><?php echo $dados['exercicio2']; ?></td>
                </td>
                <td><?php echo $dados['exercicio3']; ?></td>
                </td>
                <td><?php echo $dados['exercicio4']; ?></td>
                </td>
                <td><?php echo $dados['exercicio5']; ?></td>
                </td>
                <td><?php echo $dados['exercicio6']; ?></td>
                </td>
                <td>
                  <a class="btn btn-warning btn-sm" href="cadastro_treino.php?id=<?php echo $dados['id'] ?>" role="button"><i data-feather="edit"></i></a>
                </td>
                <td>
                  <a class="btn btn-danger btn-sm" href="../banco_de_dados/treino/delete_treino.php?id=<?php echo $dados['id'] ?>" role="button"><i data-feather="trash-2"></i></a>
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
            <td>-</td>
            <td>-</td>
            <td>-</td>
          </tr>

        <?php
        }

        ?>
      </table>

      <div class="container text-center">
        <a class="btn btn-dark btn-lg col-sm-3 me-2" href="cadastro_treino.php" role="button">Cadastrar</a>

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