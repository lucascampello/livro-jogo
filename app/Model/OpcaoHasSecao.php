<?php
namespace APP\Model;

use CoffeeCode\DataLayer\DataLayer;

class OpcaoHasSecao extends DataLayer { 
    public function __construct() {
        parent::__construct('secao_has_opcao',['opcao_id'],'secao_id',false);
    }
}