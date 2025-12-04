<?php

namespace APP\Controller;

use APP\Model\Jogador;
use APP\Model\Secao;
use APP\Template\View;

class GameController {
    private Object $secao;
    private array $opcoes;
    private array $inimigos;
    private array $inventario;

    public function __construct() {

    }

    public function load(Jogador $personagem) {
        $idSecaoAtual = ($personagem->data->secao_id == NULL)? 1 : $personagem->data->secao_id;         
        $this->secao = (new Secao())->findById($idSecaoAtual)->data();
        $this->opcoes = (new Secao())->opcoes($this->secao->id);
        $this->inimigos = (new Secao())->inimigos($this->secao->id);
        $this->drawGame($personagem);
        $personagem->secao_id = $idSecaoAtual;
        $personagem->save();
    }

    public function drawGame(Jogador $personagem) {
        $view = new View(VIEW."/game/secao.view.php");
        echo $view->render([  
            'personagem' => $personagem,
            'secao' => $this->secao,
            'opcoes' => $this->opcoes,

        ]);         
    }

    public function getDados() : array {
        $dados = array();

        return $dados;
    }

    public static function Rollback() {
        session_destroy();
        require("index.php");
        die(); 
    }

    public function save($dados) {

    }
}