<header>
  <div class="top-bar">
    <div class="container">
      <a href="#">DC POWER VISA&#174;</a>
      <a href="#">ADDITIONAL DC SITES &#11206;</a>
    </div>
  </div>
  <div class="bottom-bar container">
    <figure>
      <a href="{{ url('/')}}"><img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo"></a>
    </figure>
    <nav>
      <ul>
        <li><a href="{{ route('characters')}}">Characters</a></li>
        <li><a href="{{ route('comics')}}">Comics</a></li>
        <li><a href="{{ route('movies')}}">Movies</a></li>
        <li><a href="{{ route('tv')}}">TV</a></li>
        <li><a href="{{ route('games')}}">Games</a></li>
        <li><a href="{{ route('collectibles')}}">Collectibles</a></li>
        <li><a href="{{ route('videos')}}">Videos</a></li>
        <li><a href="{{ route('fans')}}">Fans</a></li>
        <li><a href="{{ route('news')}}">News</a></li>
        <li><a href="{{ route('shop')}}">Shop <span>&#9207;</span></a></li>
      </ul>
    </nav>
    <div>
      <input type="text" placeholder="Search"><i class="fas fa-search"></i>
    </div>
  </div>
</header>