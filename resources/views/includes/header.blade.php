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
        <li><a class="{{ Request::route()->getName() == 'characters' ? 'active' : ''}}" href="{{ route('characters')}}">Characters</a></li>
        <li><a class="{{ Request::route()->getName() == 'comics' ? 'active' : ''}}" href="{{ route('comics')}}">Comics</a></li>
        <li><a class="{{ Request::route()->getName() == 'movies' ? 'active' : ''}}" href="{{ route('movies')}}">Movies</a></li>
        <li><a class="{{ Request::route()->getName() == 'tv' ? 'active' : ''}}" href="{{ route('tv')}}">TV</a></li>
        <li><a class="{{ Request::route()->getName() == 'games' ? 'active' : ''}}" href="{{ route('games')}}">Games</a></li>
        <li><a class="{{ Request::route()->getName() == 'collectibles' ? 'active' : ''}}" href="{{ route('collectibles')}}">Collectibles</a></li>
        <li><a class="{{ Request::route()->getName() == 'videos' ? 'active' : ''}}" href="{{ route('videos')}}">Videos</a></li>
        <li><a class="{{ Request::route()->getName() == 'fans' ? 'active' : ''}}" href="{{ route('fans')}}">Fans</a></li>
        <li><a class="{{ Request::route()->getName() == 'news' ? 'active' : ''}}" href="{{ route('news')}}">News</a></li>
        <li><a class="{{ Request::route()->getName() == 'shop' ? 'active' : ''}}" href="{{ route('shop')}}">Shop <span>&#9207;</span></a></li>
      </ul>
    </nav>
    <div>
      <input type="text" placeholder="Search"><i class="fas fa-search"></i>
    </div>
  </div>
</header>