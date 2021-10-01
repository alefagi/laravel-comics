<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Comics</title>
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
  @include('includes.header')

  <main>
    <div class="jumbo"></div>

    <section id="content">
      <div class="container">
        <div class="title">CURRENT SERIES</div>
        {{-- inserire qui le card --}}
        <div class="card">
          <figure>
            <img :src="image" :alt="title">
          </figure>
          <figcaption></figcaption>
        </div>
        <button>LOAD MORE</button>
      </div>
    </section>
    
    <section id="shop">
      <div class="container">
        <a href="#">
          <figure>
            <img src="{{ asset('images/buy-comics-digital-comics.png')}}" alt="digital-comics">
          </figure>
          <span>digital comics</span>
        </a>
        <a href="#">
          <figure>
            <img src="{{ asset('images/buy-comics-merchandise.png')}}" alt="merchandise">
          </figure>
          <span>dc merchandise</span>
        </a>
        <a href="#">
          <figure>
            <img src="{{ asset('images/buy-comics-subscriptions.png')}}" alt="subscriptions">
          </figure>
          <span>subscription</span>
        </a>
        <a href="#">
          <figure>
            <img src="{{ asset('images/buy-comics-shop-locator.png')}}" alt="shop-locator">
          </figure>
          <span>comic shop locator</span>
        </a>
        <a href="#">
          <figure>
            <img src="{{ asset('images/buy-dc-power-visa.svg')}}" alt="buy-dc">
          </figure>
          <span>dc power visa</span>
        </a>
      </div>
    </section>
  </main>
  
  @include('includes.footer')
  
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>