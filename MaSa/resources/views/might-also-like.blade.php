<div class="might-also-like">
  <h2 class="might-like-title">Peliculas que tambien pueden gustarte...</h2>
  <div class="might-like-grid">
    @foreach ($mightAlsoLike as $pelicula)
      <div class="might-also-like-pelicula">
        <a href="{{route('pelicula.show', $pelicula->id)}}" class="might-like-pelicula">
          <img src="/img/{{ $pelicula->featured_img }}" class="might-like-img">
          <div class="might-like-pelicula-name">
            {{ $pelicula->name }}
          </div>
          <div class="might-like-pelicula-price">
            ${{ $pelicula->price }}
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
