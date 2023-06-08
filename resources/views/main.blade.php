<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/cvb7cor.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <title>Home</title>
</head>
<body>
    <section class="hero">
        <header>
            <div class="logo">
                <img class="spacex" src="assets/spacex.png" alt="SpaceX Logo">
                <img class="astrodragon" src="assets/astrodragon-small-white.svg" alt="Dragon Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="http://localhost:8000">Home</a></li>
                    <li><a href="http://localhost:8000/details">Mission</a></li>
                    <li><a href="http://localhost:8000/login">Log in</a></li>
                </ul>
            </nav>
        </header>
        <div class="hero-slogan">
                <h1>HUMANS <br>IN <span class="h1color">SPACE</span></h1>
                <h3>Making life multiplanetary</h3>
                <a class="btn" href="#countdown-container">Explore</a>
        </div>
    </section>

    <section class="intro">

        <div id="countdown-container">
            <h3>Till Launch</h3>
            <div class="countdown-item" id="days">00</div>
            <div class="countdown-label">Days</div>
            <div class="countdown-item" id="hours">00</div>
            <div class="countdown-label">Hours</div>
            <div class="countdown-item" id="seconds">00</div>
            <div class="countdown-label">Seconds</div>
          </div>

          <div class="intro-text">
            <h3>Embarking on a Historic Mission: SpaceX's AstroDragon Sets Course to Transport Humans to Space on October 10, 2034</h3>
            <a class="intro-btn" href="detail.html">Learn more</a>
    </div>
    </section>
    <section class="overview">

        <div class="slideshow-container">
            <div class="slide">
                <div class="slide-content">
                  <div class="slide-text">
                    <div class="slide-text-wrap">
                        <h3>EARTH ORBIT</h3>
                        <p>In a remarkable display of human achievement and scientific progress, our new human space flight mission is poised to venture into Earth's orbit.</p>
                        <a class="slide-btn" href="http://localhost:8000/details">View Details</a>
                    </div>
                  </div>
                  <div class="slide-image" style="background-image: url('assets/earth.jpg');"></div>
                </div>
              </div>
              <div class="slide">
                <div class="slide-content">
                  <div class="slide-text">
                    <div class="slide-text-wrap">
                        <h3>THE MOON</h3>
                        <p>Embarking on an extraordinary odyssey, our human space flight mission sets its sights on the Moon, fueling the dreams and aspirations of generations.</p>
                        <a class="slide-btn" href="http://localhost:8000/details">View Details</a>
                    </div>
                  </div>
                  <div class="slide-image" style="background-image: url('assets/moon.jpg');"></div>
                </div>
              </div>
              <div class="slide">
                <div class="slide-content">
                  <div class="slide-text">
                    <div class="slide-text-wrap">
                        <h3>MARS</h3>
                        <p>Embarking on an unprecedented endeavor, our human space flight mission sets its sights on Mars, heralding a new chapter in the exploration of our neighboring planet.</p>
                        <a class="slide-btn" href="http://localhost:8000/details">View Details</a>
                    </div>
                  </div>
                  <div class="slide-image" style="background-image: url('assets/mars.jpg');"></div>
                </div>
              </div>
          
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
          </div>

    </section>

    <footer>
      <div class="logo">
        <img class="spacex" src="assets/spacex.png" alt="SpaceX Logo">
        <img class="astrodragon" src="assets/astrodragon-small-white.svg" alt="Dragon Logo">
      </div>
      <div class="icon">
        <img src="assets/icons8-youtube (1).svg" alt="SpaceX Logo">
        <img class="instagram" src="assets/icons8-instagram.svg" alt="Dragon Logo">
        <img class="facebook" src="assets/icons8-facebook.svg" alt="Dragon Logo">
      </div>
    </footer>
</body>
</html>