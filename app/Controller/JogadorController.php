<?php 

namespace APP\Controller;

use APP\Model\Jogador;
use APP\Template\View;

class JogadorController {
    public function __construct() {
    }

    public static function create() {
        $dados = empty($_POST['dados'])? JogadorController::Generate() : $_POST['dados'];

        $view = new View(VIEW."/jogador/create.view.php");
        echo $view->render([  
            'dados' => $dados,
        ]); 
    }

    public static function load() {
        $dados = empty($_POST['dados'])? false : $_POST['dados'];
        if($dados === false) {
            $personagens = (new Jogador)->find()->fetch(true);
            $view = new View(VIEW."/jogador/load.view.php");
            echo $view->render([  
                'personagens' => $personagens
            ]); 
        }
        else
        {
            $personagem = (new Jogador())->findById($dados['id']);
            (new GameController)->load($personagem);
        }
    }

    public static function update() {
        $dados = empty($_POST['dados'])? false : $_POST['dados'];
        if(empty($dados))
             GameController::Rollback();

        $personagem = (new Jogador())->findById($dados['id']);
        $personagem->vida_atual = $dados['vida_atual'];
        $personagem->habilidade_atual = $dados['habilidade_atual'];
        $personagem->sorte_atual = $dados['sorte_atual'];
        $personagem->save();
        (new GameController)->load($personagem);
    }

    public static function play() {
        $dados = empty($_POST['dados'])? false : $_POST['dados'];
        if(empty($dados))
             GameController::Rollback();

        $personagem = (new Jogador())->findById($dados['id']);
        $personagem->secao_id = $dados['secao_id'];
        $personagem->save();
        print_r($_POST);
        (new GameController)->load($personagem);
    }


    public static function save() {
        $dados = $_POST['dados'];
        if(empty($dados))
             GameController::Rollback();

        $personagem = new Jogador();
        $personagem->nome = $dados['nome'];
        $personagem->vida = $dados['vida'];
        $personagem->vida_atual = $dados['vida'];
        $personagem->habilidade = $dados['habilidade'];
        $personagem->habilidade_atual = $dados['habilidade'];
        $personagem->sorte = $dados['sorte'];
        $personagem->sorte_atual = $dados['sorte'];
        $personagem->save();
        (new GameController)->load($personagem);
    }

    public static function generate() : array {
        $dados['nome'] = "Sem Nome";
        $dados['habilidade'] = random_int(1,6) + 6;
        $dados['vida'] = random_int(2,12) + 6;
        $dados['sorte'] = random_int(1,6) + 6;

        return $dados;
    }
}