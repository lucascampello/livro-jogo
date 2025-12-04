<?php
namespace APP\Model;
use CoffeeCode\DataLayer\DataLayer;

class Secao extends DataLayer {
    public function __construct()
    {
       parent::__construct("secao", ["texto"],"id",false); 
    }

     // retorna todas as opções associadas
    public function opcoes($id)
    {
        $pivot = new OpcaoHasSecao();

        $registros = $pivot->find("secao_id = :id", "id={$id}")->fetch(true);
        if (!$registros) {
            return [];
        }

        $opcao = new Opcao();
        $opcoes = [];

        foreach ($registros as $r) {
            $op = $opcao->findById($r->opcao_id)->data();
            if ($op) {
                $opcoes[] = $op;
            }
        }

        return $opcoes;
    }

    // Retorna uma Lista de Inimigos de Acordo com a Seção do ID
    public function inimigos($id) {
        $pivot = new OpcaoHasSecao();

        $registros = $pivot->find("secao_id = :id", "id={$id}")->fetch(true);
        if (!$registros) {
            return [];
        }

        $opcao = new Opcao();
        $opcoes = [];

        foreach ($registros as $r) {
            $op = $opcao->findById($r->opcao_id)->data();
            if ($op) {
                $opcoes[] = $op;
            }
        }

        return $opcoes;

    }
}