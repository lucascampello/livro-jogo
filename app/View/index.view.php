<!doctype html>
<html lang="pt-BR">
    <?php include(VIEW."/base/head.view.php") ?>
<body>
    <main class="container">
        <div class="card shadow-sm card-centered">
        <div class="card-body">
            <h1 class="card-title mb-3 text-center">📖 {{ $titulo }}</h1>
            <p class="text-muted">
                Bem-vindo(a). <br/>
                Escolha criar um novo jogador ou carregar um existente para começar a aventura.
            </p>

            <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="player.php?op=create" class="btn btn-primary btn-big" alt="Criar Jogador" title="Criar Jogador">Criar Jogador</a>
            <a href="player.php?op=load" class="btn btn-outline-secondary btn-big" alt="Carregar Partida" title="Carregar Partida">Carregar Partida</a>
            </div>

            <hr class="my-4">

            <div class="text-right mt-3 text-muted small">
            <p>Desenvolvedor: {{ $dev }}.</p>
            <p>Versão: {{ $versao }}.</p>
            </div>
        </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>