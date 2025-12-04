<!doctype html>
<html lang="pt-BR">
  <?php include(VIEW."/base/head.view.php"); ?>
  <body>
    <div class="container d-flex justify-content-center align-items-center mb-2">
        <a href="index.php" class="btn btn-outline-secondary">Voltar ao Início</a>
    </div>
    <div class="container my-4">
        <div class="d-flex flex-wrap justify-content-center gap-2">
    @foreach($personagens as $personagem)
            <div class="text-center p-1" style="width: 350px;">
                <div class="card text-center p-4" style="max-width: 400px; width: 100%;">
                    <h5 class="card-title mb-4">{{ $personagem->nome }}</h5>
                    
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-6 text-start fw-bold">Habilidade:</div>
                            <div class="col-6 text-end">{{ $personagem->habilidade_atual}}/{{$personagem->habilidade}}</div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-6 text-start fw-bold">Vida:</div>
                            <div class="col-6 text-end">{{$personagem->vida_atual}}/{{$personagem->vida}}</div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6 text-start fw-bold">Sorte:</div>
                            <div class="col-6 text-end">{{$personagem->sorte_atual}}/{{$personagem->sorte}}</div>
                        </div>

                        <div class="d-grid">
                            <form action="player.php?op=load" method="POST">
                                <input type="hidden" name="dados[id]" value="{{ $personagem->id }}">
                                <button type="submit" class="btn btn-primary">Carregar Jogador</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
        </div>
    </div>
    <script src="../resources/js/main.js"></script>
  </body>
</html>