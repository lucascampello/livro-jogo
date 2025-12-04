<?php

namespace APP\Model;

use CoffeeCode\DataLayer\DataLayer;

class Jogador extends DataLayer {
    public function __construct() {
        parent::__construct("jogador",["nome","habilidade","habilidade_atual","vida","vida_atual","sorte","sorte_atual"],"id",false);

    }
}
