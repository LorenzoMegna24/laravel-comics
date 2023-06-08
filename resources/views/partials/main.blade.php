<div class="jumbo">
      <span>CURRENT SERIES</span>
    </div>
    <div class="content">
      @foreach (Config::get('comics.listaFumetti') as $element)
      <div class="card">
        <img src="{{$element['thumb']}}" alt="">
        <h3>{{ $element['series'] }}</h3>
        <span>{{ $element['type'] }}</span>
        <span>{{ $element['price'] }}</span>
      </div>
      @endforeach
    </div>
    <div class="links">
      <ul>
        <li>
          <a href="/"><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
          <span>digital comics</span></a>
        </li>
        <li>
          <a href="/"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
          <span>dc merchandise</span></a>
        </li>
        <li>
          <a href="/"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
          <span>subscription</span></a>
        </li>
        <li>
          <a href="/"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
          <span>comics shop locator</span></a>
        </li>
        <li>
          <a href="/"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
          <span>dc power visa</span></a>
        </li>
      </ul>
    </div>