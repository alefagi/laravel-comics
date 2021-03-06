@extends('layouts.main')

@section('title', 'Comics')

@section('content')
  <section id="content">
    <div class="container">
      <div class="title">CURRENT SERIES</div>
      <div class="cards-container">
        @foreach ($comics as $comic)
        <div class="card">
          <a href="{{ route('comic', ['id' => $loop->index]) }}">
            <figure>
              <img src="{{ $comic['thumb']}}" alt="{{ $comic['series']}}">
            </figure>
            <figcaption>{{ $comic['series']}}</figcaption>
          </a>
        </div>
        @endforeach
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
@endsection

