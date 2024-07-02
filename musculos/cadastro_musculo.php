<?php
    include_once '../includes/header.php';
    include_once '../banco_de_dados/connect.php';

    $dados[] = '';

    if (isset($_GET['id'])) {
      $id = mysqli_escape_string($connect, $_GET['id']);
  
      $sql = "SELECT * FROM musculo where id = '$id'";
      $resultado = mysqli_query($connect, $sql);
      $dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    }

  $urlBanco = "../banco_de_dados/musculos/create_musculos.php";
  $tituloPagina = "Cadastro de Músculos";
  $txtBtnVerde = "Cadastrar músculo";

  if(isset($dados['id'])) { 
    $urlBanco = "../banco_de_dados/musculos/update_musculos.php";
    $tituloPagina = "Atualizar cadastro de músculo";
    $txtBtnVerde = "Atualizar músculo";
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
            <a class="nav-link" href="../exercicio/exercicio_lista.php">Músculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../exercicio/exercicio_lista.php">Exercícios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../treino/lista_treino.php"> Treinos </a>
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
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do músculo" value="<?php if (isset($dados['nome'])) echo $dados['nome'] ?>" required>
                    <?php if (isset($_GET['errosNome'])) { ?>
                        <span class="small-warning">
                            <?php if (isset($_GET['errosNome'])) echo '*' . $_GET['errosNome'] ?>
                        </span>
                    <?php } ?>
                </div>
                <div class="mt-1">
                    <input type="url" name="link" class="form-control" id="link" placeholder="Link do músculo" value="<?php if (isset($dados['link'])) echo $dados['link'] ?>" required>
                    <?php if (isset($_GET['errosLink'])) { ?>
                        <span class="small-warning">
                            <?php if (isset($_GET['errosLink'])) echo '*' . $_GET['errosLink'] ?>
                        </span>
                    <?php } ?>
                </div>

                <div class="mt-1">
                    <input name="id" type="hidden" class="form-control" id="id" value="<?php if(isset($dados['id'])) echo $dados['id'] ?>">
                </div>
                <div class="text-center mt-1 mb-0">
                    <button type="text" class="btn btn-success btn-lg col-12" name="btn-cadastrar-musculos" required><?php echo $txtBtnVerde; ?></button>
                </div>
            </form>
            <div class="container text-center mt-1">
                <a class="btn btn-secondary btn-lg col-sm-3" href="musculos_lista.php" role="button">Voltar</a>
            </div>
        </div>
    </div>
</div>

<?php
include_once '../includes/footer.php';
?>