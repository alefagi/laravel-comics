@extends('layouts.main')

@section('content')
  <div class="serie-buy">
    <div class="container-small">
      <div class="description">
        <h2>{{ $series[0]['title']}}</h2>
        <div class="serie-price">
          <div>
            <span>U.S. Price: <strong>{{ $series[0]['price']}}</strong></span>
            <span>AVAILABLE</span>
          </div>
          <div>
            <a href="#">Check Availability &#9207;</a>
          </div>
        </div>
        <p>{{ $series[0]['description']}}</p>
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
            <p class="primary">{{ $series[0]['artists'][0]}}</p>
          </div>
          <div class="detail">
            <h5>Written by:</h5>
            <p class="primary">{{ $series[0]['writers'][0]}}</p>
          </div>
        </div>
        <div class="specs">
          <h3>Specs</h3>
          <div class="detail">
            <h5>Series:</h5>
            <p class="primary">{{ $series[0]['series']}}</p>
          </div>
          <div class="detail">
            <h5>U.S. Price:</h5>
            <p>{{ $series[0]['price']}}</p>
          </div>
          <div class="detail">
            <h5>On Sale Date:</h5>
            <p>{{ $series[0]['sale_date']}}</p>
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