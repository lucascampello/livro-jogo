<?php
namespace APP\Model;

use CoffeeCode\DataLayer\DataLayer;

class Opcao extends DataLayer { 
    public function __construct() {
        parent::__construct('opcao',['secao_destino','descricao'],'id',false);
    }
}