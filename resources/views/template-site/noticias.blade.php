<div class="news-section" id="news">
  <div class="container">
    <div class="news-section-head text-center">
      <h3>Principais Notícias</h3>
      <p>Notícias e principais comunicados na área da medicina oftamolórgica</p>
    </div>
    <div class="news-section-grids">
    @foreach ($notice as $notice)
          <div class="col-md-4 news-section-grid">
            <img src="images-notices/{{ $notice->imagem }}" alt="" />
            <div class="info">
              <a class="news-title" href="single.html">{{$notice->titulo}}</a>
              <label>12/Agosto</label>
              <p>{{$notice->sub_titulo}}</p>
              <a class="more" href="#">Ler Mais...</a>
            </div>
          </div>
     @endforeach

      <div class="clearfix"></div>
      
    </div>
  </div>
</div>
