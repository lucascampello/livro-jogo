<?php

use APP\Controller\GameController;

  require("../vendor/autoload.php");
  require("resources/config.php");

  if(GameController::load())
    $dados = GameController::getDados();
  else
    GameController::Rollback();
    
?>
<!doctype html>
<html lang="pt-BR">
<?php require(VIEW."/head.tpl.php"); ?>
  <body>
<?php require(VIEW."/game/game.tpl.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
  GameController::save($dados);
?>