<!doctype html>
<html lang="pt-BR">
    <?php include(VIEW."/base/head.view.php") ?>
<body>
    <main class="container">
        <div class="row card my-5">
            <h1 class="card-title mb-3 text-center">Seção {{ $secao->id }}</h1>
            <p class="text-muted">
                {{ $secao->texto }}
            </p>
        @foreach($opcoes as $opcao)
            <form action="player.php?op=play" method="POST">
                <input type="hidden" name="dados[id]" value="{{ $personagem->id }}">
                <div class="d-flex justify-content-center gap-3 mt-4">
                    <input type="hidden" name="dados[secao_id]" value="{{ $opcao->secao_destino }}">
                    <button type="submit" class="btn btn-secondary">{{ $opcao->descricao}}</button>
                </div>
            </form>
        @endforeach
            <hr class="my-4">
            <form action="player.php?op=update" method="POST">
                <input type="hidden" name="dados[id]" value="{{ $personagem->id }}">
                <div class="text-right mt-2 text-muted small">
                    <div class="row">
                        <div class="col-5">
                            <label><b>Personagem:</b></label> <spam class="margin-right: 2rem"> {{ $personagem->nome }}.</spam>
                        </div>
                        <div class="col-2">
                            <label><b>Vida: </b></label> 
                            <spam class="margin-right: 2rem">
                                <select name="dados[vida_atual]"><?php
                                        for($cont = $personagem->vida; $cont >= 1; $cont--)
                                            echo '<option value="'.$cont.'"'.($cont == $personagem->vida_atual? " selected" : "").'>'.$cont.'</option>';
                                    ?></select> 
                                / {{ $personagem->vida }}
                            </spam>
                        </div>
                        <div class="col-3">
                            <label><b>Habilidade:</b></label> 
                            <spam>
                                <select name="dados[habilidade_atual]"><?php
                                        for($cont = $personagem->habilidade; $cont >= 1; $cont--)
                                            echo '<option value="'.$cont.'"'.($cont == $personagem->habilidade_atual? " selected" : "").'>'.$cont.'</option>';
                                    ?></select> 
                                /  {{ $personagem->habilidade }}</spam>
                        </div>
                        <div class="col-2">
                            <label><b>Sorte:</b></label> 
                            <spam> 
                                <select name="dados[sorte_atual]"><?php
                                        for($cont = $personagem ->sorte; $cont >= 1; $cont--)
                                            echo '<option value="'.$cont.'"'.($cont == $personagem ->sorte_atual? " selected" : "").'>'.$cont.'</option>';
                                    ?></select> 
                                /  {{ $personagem ->sorte }}</spam>
                        </div>
                    </div>
                </div>
                <div class="text-right text-muted small">
                    <div class="row">
                        <div class="col-12">
                            <?php
                                if(!empty($arma))
                                    echo '<label><b>Arma:</b></label> <spam class="margin-right: 2rem"> Padrão (32 Dano).</spam>';
                                else
                                    echo '<label><b>Arma:</b></label> <spam class="margin-right: 2rem"> Padrão (2 Dano).</spam>';
                            ?> 
                        </div>
                    </div>
                </div>
                <div class="text-center mb-2 text-muted small">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <input type="submit" name="dados[submit]" value="Atualizar Personagem">
                        </div>
                        <div class="col-3"></div>
                    </div>
            </form>
            <a href="dados.php" class="btn btn-info" onclick="window.open(this.href, 'janelaPersonalizada', 'width=200,height=140'); return false;">Rolar Dados</a>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>