<?php 
    include_once 'includes/header.php';
?>

<a class="navbar-brand" href="index.php">The Gym</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./musculos/musculos_lista.php">Músculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="exercicio/exercicio_lista.php">Exercícios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="compras.php"> --- </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="grid text-center mt-5 flex-grow-1">
    <div class="col-12">
        <div class="container mt-4">
            <h2>Bem-vindo ao Projeto CRUD</h2>
            <p>Este é um projeto de exemplo para demonstrar meus conhecimentos em PHP, SQL, HTML, CSS, Bootstrap e JavaScript, onde estarei simulando um sistema de academia.</p>
            <p>Utilize a barra de navegação acima para explorar o site.</p>
        </div>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>