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

  <div class="serie-details"></div>
@endsection