@extends('layouts.main')

@section('title', 'Comic')

@section('content')
  <div class="serie-buy">
    <div class="container-small">
      <div class="description">
        <h2 class="text-uppercase">{{ $comic['title']}}</h2>
        <div class="serie-price">
          <div>
            <span>U.S. Price: <strong>{{ $comic['price']}}</strong></span>
            <span>AVAILABLE</span>
          </div>
          <div>
            <a href="#">Check Availability &#9207;</a>
          </div>
        </div>
        <p>{{ $comic['description']}}</p>
      </div>
      <div class="advertisement">
        <h4>ADVERTISEMENT</h4>
        <figure>
          <img src="{{ asset('/images/adv.jpg') }}" alt="adv">
        </figure>
      </div>
    </div>
  </div>

  <div class="serie-details">
    <section id="details-top">
      <div class="container-small">
        <div class="talent">
          <h3>Talent</h3>
          <div class="detail">
            <h5>Art by:</h5>
            <p class="text-primary">{{ implode(', ', $comic['artists'])}}</p>
          </div>
          <div class="detail">
            <h5>Written by:</h5>
            <p class="text-primary">{{ implode(', ', $comic['writers'])}}</p>
          </div>
        </div>
        <div class="specs">
          <h3>Specs</h3>
          <div class="detail">
            <h5>Series:</h5>
            <p class="text-primary text-uppercase">{{ $comic['series']}}</p>
          </div>
          <div class="detail">
            <h5>U.S. Price:</h5>
            <p>{{ $comic['price']}}</p>
          </div>
          <div class="detail">
            <h5>On Sale Date:</h5>
            <p>{{ $comic['sale_date']}}</p>
          </div>
        </div>
      </div>
    </section>
    <section id="details-bottom">
      <div class="container-small">
        <a href="#">
          <span>DIGITAL COMICS</span>
          <figure>
            <img src="{{ asset('images/buy-comics-digital-comics.png')}}" alt="digital-comics">
          </figure>
        </a>
        <a href="#">
          <span>SHOP DC</span>
          <figure>
            <img src="{{ asset('images/buy-comics-subscriptions.png')}}" alt="merchandise">
          </figure>
        </a>
        <a href="#">
          <span>COMIC SHOP LOCATOR</span>
          <figure>
            <img src="{{ asset('images/buy-comics-shop-locator.png')}}" alt="shop-locator">
          </figure>
        </a>
        <a href="#">
          <span>SUBSCRIPTIONS</span>
          <figure>
            <img src="{{ asset('images/buy-comics-merchandise.png')}}" alt="subscriptions">
          </figure>
        </a>
      </div>
    </section>  
  </div>
@endsection