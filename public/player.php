<?php
require_once("../vendor/autoload.php");
require_once("resources/config.php");
use APP\Controller\GameController;
use APP\Controller\JogadorController;

  if(empty($_GET['op']))
    GameController::Rollback();

  $validarOpcoes = ['load','create', 'save', 'update', 'play'];
  if(array_search($_GET['op'], $validarOpcoes) === false)
    GameController::Rollback();

  $function = $_GET['op'];
  JogadorController::$function();
?>