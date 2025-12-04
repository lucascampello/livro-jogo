<!doctype html>
<html lang="pt-BR">
  <?php include(VIEW."/base/head.view.php"); ?>
  <body>
    <main class="container">
        <div class="card shadow-sm card-centered">
        <div class="card-body">
            <h1 class="card-title mb-3 text-center">📖 <?= TITULO ?></h1>
            <p class="text-muted text-center">Tela de Criação de Jogadores</p>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <form method="post" action="player.php?op=save" class="p-3 border rounded bg-white shadow-sm">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input id="nome" name="dados[nome]" type="text" class="form-control" maxlength="100" required value="<?=$dados['nome']?>">
                    </div>


                    <div class="mb-3">
                        <label for="classe" class="form-label">Habilidade Inicial</label>
                        <input id="classe" name="dados[habilidade]" type="text" class="form-control" maxlength="50" readonly value="<?=$dados['habilidade']?>">
                    </div>


                    <div class="mb-3">
                        <label for="avatar" class="form-label">Vida Inicial</label>
                        <input id="avatar" name="dados[vida]" type="text" class="form-control" readonly value="<?=$dados['vida']?>">
                    </div>


                    <div class="mb-3">
                        <label for="nota" class="form-label">Sorte Inicial</label>
                        <input id="nota" name="dados[sorte]" type="text" class="form-control" maxlength="255"  readonly value="<?=$dados['sorte']?>">
                    </div>


                    <div class="d-flex justify-content-between gap-2">
                        <a href="" class="btn btn-outline-primary">Novo Personagem</a>
                        <button type="submit" name="acao" value="salvar" class="btn btn-outline-primary">Escolher Este</button>
                        <a href="index.php" class="btn btn-outline-secondary">Voltar ao Início</a>
                    </div>
                </form>
            </div>

            <hr class="my-4">

            <div class="text-right mt-3 text-muted small">
                <p>Desenvolvedor: <?= DEV ?></p>
                <p>Versão: <?= VERSAO ?></p>
            </div>
        </div>
        </div>
    </main>
</body>
</html>