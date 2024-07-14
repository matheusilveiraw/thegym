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
  if (isset($_GET['sqlError'])) {
  ?>
    <div class="alert alert-warning" role="alert">
      Erro! Tentou passar código SQL!
    </div>
  <?php
  }
  if (isset($_GET['sqlError'])) {
  ?>
    <div class="alert alert-warning" role="alert">
      Erro! Tentou passar código SQL!
    </div>
  <?php
  }
  ?>