<div class="might-also-like">
  <h2 class="might-like-title">Titulos que tambien pueden gustarte...</h2>
  <div class="might-like-grid">
    @foreach ($mightAlsoLike as $titulo)
      <div class="might-also-like-titulo">
        <a href="{{route('titulo.show', $titulo->id)}}" class="might-like-titulo">
          <img src="/img/{{ $titulo->featured_img }}" class="might-like-img">
          <div class="might-like-titulo-name">
            {{ $titulo->name }}
          </div>
          <div class="might-like-titulo-rating">
            ${{ $titulo->rating }}
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
