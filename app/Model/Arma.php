<?php

namespace APP\Model;

use CoffeeCode\DataLayer\DataLayer;

class Arma extends DataLayer {
    public function __construct() {
        parent::__construct("arma",["nome","dano"],"id",false);

    }
}
