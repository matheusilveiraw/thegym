<?php
include_once '../includes/header.php';
include_once '../banco_de_dados/connect.php';

$dados[] = '';

if (isset($_GET['id'])) {
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM treino where id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
}

$urlBanco = "../banco_de_dados/treino/create_treino.php";
$tituloPagina = "Cadastro de treino";
$txtBtnVerde = "Cadastrar treino";

if (isset($dados['id'])) {
  $urlBanco = "../banco_de_dados/treino/update_treino.php";
  $tituloPagina = "Atualizar cadastro de treino";
  $txtBtnVerde = "Atualizar treino";
}

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
            <a class="nav-link" href="../exercicios/exercicios_lista.php"> Músculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../exercicio/exercicio_lista.php"> Exercícios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lista_treino.php"> Treinos </a>
          </li>
        </ul>
      </div>
</div>
</nav>


<div class="container flex-grow-1">
  <div class="row justify-content-center">
    <div class="col-10">
      <h1 class="text-center mt-5"><?php echo $tituloPagina; ?></h1>
      <form class="form-horizontal col-12" action=<?php echo $urlBanco; ?> method="POST">

        <div class="mt-1">
          <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do treino" value="<?php if (isset($dados['nome'])) echo $dados['nome'] ?>" required>
          <?php if (isset($_GET['errosNome'])) { ?>
            <span class="small-warning">
              <?php if (isset($_GET['errosNome'])) echo '*' . $_GET['errosNome'] ?>
            </span>
          <?php } ?>
        </div>
        <div class="mt-1">
          <select class="container form-select" aria-label=".form-select-lg example" required name="exercicio1" id="exercicio1">
            <option disabled selected value="">Selecione o exercício 1</option>

            <?php
            $sqlExer = "SELECT * FROM exercicio";
            $resultadoExer = mysqli_query($connect, $sqlExer);
            if (mysqli_num_rows($resultadoExer) > 0) {
              while ($dadosExer = mysqli_fetch_array($resultadoExer)) {
                $selected = ($dadosExer['id'] == $dados['exercicio']) ? 'selected' : '';
            ?>
                <option value="<?php echo $dadosExer['id']; ?>" <?php echo $selected; ?>> <?php echo $dadosExer['nome']; ?></option>
              <?php }

              ?>

            <?php
            } else {
            ?>
              <option disabled value="">Nenhum exercicio registrado</option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="mt-1">
          <select class="container form-select" aria-label=".form-select-lg example" required name="exercicio2" id="exercicio2">
            <option disabled selected value="">Selecione o exercício 2</option>

            <?php
            $sqlExer = "SELECT * FROM exercicio";
            $resultadoExer = mysqli_query($connect, $sqlExer);
            if (mysqli_num_rows($resultadoExer) > 0) {
              while ($dadosExer = mysqli_fetch_array($resultadoExer)) {
                $selected = ($dadosExer['id'] == $dados['exercicio']) ? 'selected' : '';
            ?>
                <option value="<?php echo $dadosExer['id']; ?>" <?php echo $selected; ?>> <?php echo $dadosExer['nome']; ?></option>
              <?php }

              ?>

            <?php
            } else {
            ?>
              <option disabled value="">Nenhum exercicio registrado</option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="mt-1">
          <select class="container form-select" aria-label=".form-select-lg example" required name="exercicio3" id="exercicio3">
            <option disabled selected value="">Selecione o exercício 3</option>

            <?php
            $sqlExer = "SELECT * FROM exercicio";
            $resultadoExer = mysqli_query($connect, $sqlExer);
            if (mysqli_num_rows($resultadoExer) > 0) {
              while ($dadosExer = mysqli_fetch_array($resultadoExer)) {
                $selected = ($dadosExer['id'] == $dados['exercicio']) ? 'selected' : '';
            ?>
                <option value="<?php echo $dadosExer['id']; ?>" <?php echo $selected; ?>> <?php echo $dadosExer['nome']; ?></option>
              <?php }

              ?>

            <?php
            } else {
            ?>
              <option disabled value="">Nenhum exercicio registrado</option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="mt-1">
          <select class="container form-select" aria-label=".form-select-lg example" required name="exercicio4" id="exercicio4">
            <option disabled selected value="">Selecione o exercício 4</option>

            <?php
            $sqlExer = "SELECT * FROM exercicio";
            $resultadoExer = mysqli_query($connect, $sqlExer);
            if (mysqli_num_rows($resultadoExer) > 0) {
              while ($dadosExer = mysqli_fetch_array($resultadoExer)) {
                $selected = ($dadosExer['id'] == $dados['exercicio']) ? 'selected' : '';
            ?>
                <option value="<?php echo $dadosExer['id']; ?>" <?php echo $selected; ?>> <?php echo $dadosExer['nome']; ?></option>
              <?php }

              ?>

            <?php
            } else {
            ?>
              <option disabled value="">Nenhum exercicio registrado</option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="mt-1">
          <select class="container form-select" aria-label=".form-select-lg example" required name="exercicio5" id="exercicio5">
            <option disabled selected value="">Selecione o exercício 5</option>

            <?php
            $sqlExer = "SELECT * FROM exercicio";
            $resultadoExer = mysqli_query($connect, $sqlExer);
            if (mysqli_num_rows($resultadoExer) > 0) {
              while ($dadosExer = mysqli_fetch_array($resultadoExer)) {
                $selected = ($dadosExer['id'] == $dados['exercicio']) ? 'selected' : '';
            ?>
                <option value="<?php echo $dadosExer['id']; ?>" <?php echo $selected; ?>> <?php echo $dadosExer['nome']; ?></option>
              <?php }

              ?>

            <?php
            } else {
            ?>
              <option disabled value="">Nenhum exercicio registrado</option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="mt-1">
          <select class="container form-select" aria-label=".form-select-lg example" required name="exercicio6" id="exercicio6">
            <option disabled selected value="">Selecione o exercício 6</option>

            <?php
            $sqlExer = "SELECT * FROM exercicio";
            $resultadoExer = mysqli_query($connect, $sqlExer);
            if (mysqli_num_rows($resultadoExer) > 0) {
              while ($dadosExer = mysqli_fetch_array($resultadoExer)) {
                $selected = ($dadosExer['id'] == $dados['exercicio']) ? 'selected' : '';
            ?>
                <option value="<?php echo $dadosExer['id']; ?>" <?php echo $selected; ?>> <?php echo $dadosExer['nome']; ?></option>
              <?php }

              ?>

            <?php
            } else {
            ?>
              <option disabled value="">Nenhum exercicio registrado</option>
            <?php
            }
            ?>
          </select>
        </div>
        <div class="mt-1">
          <input name="id" type="hidden" class="form-control" id="id" value="<?php if (isset($dados['id'])) echo $dados['id'] ?>">
        </div>
        <div class="text-center mt-1 mb-0">
          <button type="text" class="btn btn-success btn-lg col-12" name="btn-cadastrar-treino" required><?php echo $txtBtnVerde; ?></button>
        </div>
      </form>
      <div class="container text-center mt-1">
        <a class="btn btn-secondary btn-lg col-sm-3" href="treino_lista.php" role="button">Voltar</a>
      </div>
    </div>
  </div>
</div>

<?php
include_once '../includes/footer.php';
?>