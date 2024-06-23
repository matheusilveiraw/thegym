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
            <a class="nav-link" href="musculos_lista.php">Músculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produtos.php"> --- </a>
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
            <h1 class="text-center mt-5">Cadastro de Músculso</h1>
            <form class="form-horizontal col-12" action="banco_de_dados/create_musculo.php" method="POST">
                <div class="mt-1">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do músculo" value="<?php if (isset($_GET['nome'])) echo $_GET['nome'] ?>" required>
                    <?php if (isset($_GET['errosNome'])) { ?>
                        <span class="small-warning">
                            <?php if (isset($_GET['errosNome'])) echo '*' . $_GET['errosNome'] ?>
                        </span>
                    <?php } ?>
                </div>
                <div class="mt-1">
                    <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="Sobrenome" value="<?php if (isset($_GET['sobrenome'])) echo $_GET['sobrenome'] ?>" required>
                    <?php if (isset($_GET['errosSobrenome'])) { ?>
                        <span class="small-warning">
                            <?php if (isset($_GET['errosSobrenome'])) echo '*' . $_GET['errosSobrenome'] ?>
                        </span>
                    <?php } ?>
                </div>
                <div class="text-center mt-1 mb-0">
                    <button type="text" class="btn btn-success btn-lg col-12" name="btn-cadastrar-musculos" required>Cadastrar músculo</button>
                </div>
            </form>
            <div class="container text-center mt-1">
                <a class="btn btn-secondary btn-lg col-sm-3" href="musculos.php" role="button">Voltar</a>
            </div>
        </div>
    </div>
</div>

<?php
include_once '../includes/footer.php';
?>