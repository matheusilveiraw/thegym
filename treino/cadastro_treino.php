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
$tituloPagina = "Cadastro de Exercício";
$txtBtnVerde = "Cadastrar exercício";

if (isset($dados['id'])) {
  $urlBanco = "../banco_de_dados/treino/update_treino.php";
  $tituloPagina = "Atualizar cadastro de exercício";
  $txtBtnVerde = "Atualizar exercício";
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
            <a class="nav-link" href="../musculos/musculos_lista.php">Músculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="treino_lista.php">Exercícios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compras.php"> --- </a>
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
          <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do exercício" value="<?php if (isset($dados['nome'])) echo $dados['nome'] ?>" required>
          <?php if (isset($_GET['errosNome'])) { ?>
            <span class="small-warning">
              <?php if (isset($_GET['errosNome'])) echo '*' . $_GET['errosNome'] ?>
            </span>
          <?php } ?>
        </div>
        <div class="mt-1">
          <select class="container form-select" aria-label=".form-select-lg example" required name="musculo" id="musculo">
            <option disabled selected value="">Selecione um músculo</option>

            <?php
            $sql2 = "SELECT * FROM musculo";
            $resultado2 = mysqli_query($connect, $sql2);
            if (mysqli_num_rows($resultado2) > 0) {
              while ($dados2 = mysqli_fetch_array($resultado2)) {
                $selected = ($dados2['id'] == $dados['musculo']) ? 'selected' : '';
            ?>
                <option value="<?php echo $dados2['id']; ?>" <?php echo $selected; ?>> <?php echo $dados2['nome']; ?></option>
              <?php }

              ?>

            <?php
            } else {
            ?>
              <option disabled value="">Nenhum musculo registrado</option>
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