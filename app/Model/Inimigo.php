<?php

namespace APP\Model;

use CoffeeCode\DataLayer\DataLayer;

class Inimigo extends DataLayer {
    public function __construct()
    {
        parent::__construct("inimigo",["nome","vida","habilidade"],"id",false);
    }

}