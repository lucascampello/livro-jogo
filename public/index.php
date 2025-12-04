<?php

use APP\Template\View;

  require("../vendor/autoload.php");
  require("resources/config.php");

  $view = new View(VIEW."/index.view.php");
  echo $view->render([
    'titulo' => TITULO,
    'dev' => DEV,
    'versao' => VERSAO
  ]);
?>