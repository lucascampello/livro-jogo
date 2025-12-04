<footer class="bg-dark text-white py-2">
  <div class="container text-center">
    <div class="d-flex justify-content-center align-items-center flex-wrap gap-4">
      <div><strong>Nome:</strong> <span id="nome-personagem">{{ $personagem->nome }}</span></div>
      <div><strong>Vida:</strong> <span id="vida-atual">{{$personagem->vida_atual }} / {{ $personagem->vida }}</span></div>
      <div><strong>Habilidade:</strong> <span id="habilidade-atual">{{$personagem->habilidade_atual }} / {{ $personagem->habilidade }}</span></div>
      <div><strong>Sorte:</strong> <span id="sorte-atual">{{$personagem->sorte_atual }} / {{$personagem->sorte }}</span></div>
    </div>
  </div>
</footer>