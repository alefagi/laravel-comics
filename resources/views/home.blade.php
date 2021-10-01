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
  <header class="container">
    <figure>
      <img src="../images/dc-logo.png" alt="dc-logo">
    </figure>
    <nav>
      <ul>
        <li><a href="#">Characters</a></li>
        <li><a href="#">Comics</a></li>
        <li><a href="#">Movies</a></li>
        <li><a href="#">TV</a></li>
        <li><a href="#">Games</a></li>
        <li><a href="#">Collectibles</a></li>
        <li><a href="#">Videos</a></li>
        <li><a href="#">Fans</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Shop</a></li>
      </ul>
    </nav>
  </header>
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
            <img src="../images/buy-comics-digital-comics.png" alt="digital-comics">
          </figure>
          <span>digital comics</span>
        </a>
        <a href="#">
          <figure>
            <img src="../images/buy-comics-merchandise.png" alt="merchandise">
          </figure>
          <span>dc merchandise</span>
        </a>
        <a href="#">
          <figure>
            <img src="../images/buy-comics-subscriptions.png" alt="subscriptions">
          </figure>
          <span>subscription</span>
        </a>
        <a href="#">
          <figure>
            <img src="../images/buy-comics-shop-locator.png" alt="shop-locator">
          </figure>
          <span>comic shop locator</span>
        </a>
        <a href="#">
          <figure>
            <img src="../images/buy-dc-power-visa.svg" alt="buy-dc">
          </figure>
          <span>dc power visa</span>
        </a>
      </div>
    </section>
  </main>
  <footer>
    <section id="links">
      <div class="container">
        <div class="list">
          <div>
            <h4>dc comics</h4>
            <ul>
              <li><a href="#">Characters</a></li>
              <li><a href="#">Comics</a></li>
              <li><a href="#">Movies</a></li>
              <li><a href="#">TV</a></li>
              <li><a href="#">Games</a></li>
              <li><a href="#">Videos</a></li>
              <li><a href="#">News</a></li>
            </ul>
            <h4>shop</h4>
            <ul>
              <li><a href="#">Shop DC</a></li>
              <li><a href="#">Shop DC Collectibles</a></li>
            </ul>
          </div>
          <div>
            <h4>dc</h4>
            <ul>
              <li><a href="#">Terms Of Use</a></li>
              <li><a href="#">Privacy Policy (New)</a></li>
              <li><a href="#">Ad Choices</a></li>
              <li><a href="#">Advertising</a></li>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Subscriptions</a></li>
              <li><a href="#">Talent Workshops</a></li>
              <li><a href="#">CPSC Certificates</a></li>
              <li><a href="#">Ratings</a></li>
              <li><a href="#">Shop Help</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div>
            <h4>sites</h4>
            <ul>
              <li><a href="#">DC</a></li>
              <li><a href="#">MAD Magazine</a></li>
              <li><a href="#">DC Kids</a></li>
              <li><a href="#">DC Universe</a></li>
              <li><a href="#">DC Power Visa</a></li>
            </ul>
          </div>
        </div>
        <figure>
          <img src="../images/dc-logo-bg.png" alt="logo-bg">
        </figure>
      </div>
    </section>

    <section id="social">
      <div class="container">
        <button>sign-up now!</button>
        <div>
          <span>follow us</span>
          <a href="#"><img src="../images/footer-facebook.png" alt="facebook"></a>
          <a href="#"><img src="../images/footer-twitter.png" alt="twitter"></a>
          <a href="#"><img src="../images/footer-youtube.png" alt="youtube"></a>
          <a href="#"><img src="../images/footer-pinterest.png" alt="pinterest"></a>
          <a href="#"><img src="../images/footer-periscope.png" alt="periscope"></a>
        </div>
      </div>
    </section>
  </footer>  
</body>
</html>