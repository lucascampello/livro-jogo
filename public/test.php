<?php

use APP\Controller\GameController;
use APP\Model\Arma;
use APP\Model\Inimigo;
use APP\Model\Secao;

    require '../vendor/autoload.php';
    require 'resources/config.php';

$objJogo = new GameController();
//print_r($objJogo);

$objArma = new Arma();
//print_r($objArma);

$objSecao = new Secao(); 
print_r($objSecao);

$objInimigo = new Inimigo(); 
print_r($objInimigo);