@extends('layouts.main')

@section('content')
  <section id="content">
    <div class="container">
      <div class="title">CURRENT SERIES</div>
      @foreach ($series as $serie)
      <div class="card">
        <figure>
          <img src="{{ $serie['thumb']}}" alt="{{ $serie['series']}}">
        </figure>
        <figcaption>{{ $serie['series']}}</figcaption>
      </div>
      @endforeach
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
@endsection

