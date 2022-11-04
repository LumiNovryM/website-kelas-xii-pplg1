<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Omaga</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="{{ asset('dexiee/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('dexiee/css/templatemo-style.css') }}" />
  <link rel="stylesheet" href="{{ asset('dexiee/css/magnific-popup.css') }}">
<!--
Verticard Template
https://templatemo.com/tm-533-verticard
-->
</head>

<body>
  <div class="tm-page-container mx-auto">
    <header class="tm-header text-center">
      <h1 class="tm-title text-uppercase">Hello!</h1>
      <p class="tm-primary-color"><i>My Name's Dexie</i></p>
    </header>

    <section class="tm-section">
      <div class="tm-content-container">
        <figure class="mb-0">
          <img src="{{ asset('dexiee/img/gallery/ipa.jpg') }}" alt="Image" class="img-fluid tm-img" />
        </figure>
        <div class="tm-content">
          <h2 class="tm-page-title">About Me</h2>
          <p class="mb-4">
            My Name is Dexie Hazel 
          </p>
          <p>
            I still want to learn a lot about programming and I believe I can and am able to learn and understand programming languages ​​more than before 
          </p>
        </div>
      </div>
    </section>

    <div class="tm-page-container mx-auto">
      <header class="tm-header text-center">
        <h1 class="tm-title text-uppercase">My Work</h1>
        <p class="tm-primary-color"><i>.Dexx</i></p>
      </header>
  
      <div class="tm-section">
        <div class="tm-content-container">
          <div class="tm-content tm-content-2">
            <p>
                This Slide Contain My Art of Work
            </p>
  
            <div class="container-fluid">
              <div class="row tm-gallery" id="tmGallery">
                <div class="col-sm-6 tm-gallery-item">
                  <figure class="effect-bubba">
                    <img src="{{ asset('dexiee/img/gallery/galery.jpg') }}" alt="Gallery item" class="img-fluid" />
                    <figcaption>
                      <h2>Game <span>Web</span></h2>
                      <p>
                        This is a web game that has a login system</p>
                      <a href="{{ asset('dexiee/img/gallery/galery.jpg') }}">View more</a>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-sm-6 tm-gallery-item">
                  <figure class="effect-bubba">
                    <img src="{{ asset('dexiee/img/gallery/galery1.jpg') }}" alt="Gallery item" class="img-fluid" />
                    <figcaption>
                      <h2>Music <span>Web</span></h2>
                      <p>This is a web music based on html, css, php, and javascript.

                        </p>
                      <a href="{{ asset('dexiee/img/gallery/galery1.jpg') }}">View more</a>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-sm-6 tm-gallery-item">
                  <figure class="effect-bubba">
                    <img src="{{ asset('dexiee/img/gallery/galery2.jpg') }}" alt="Gallery item" class="img-fluid" />
                    <figcaption>
                      <h2>attendance <span>Web</span></h2>
                      <p>the first web about school attendance that I made</p>
                      <a href="{{ asset('dexiee/img/gallery/galery2.jpg') }}">View more</a>
                    </figcaption>
                  </figure>
                </div>
                <div class="col-sm-6 tm-gallery-item">
                  <figure class="effect-bubba">
                    <img src="{{ asset('dexiee/img/gallery/galery3.jpg') }}" alt="Gallery item" class="img-fluid" />
                    <figcaption>
                      <h2>Login <span>Web</span></h2>
                      <p>Web about registration and login new version.</p>
                      <a href="{{ asset('dexiee/img/gallery/galery3.jpg') }}">View more</a>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
    <script src="{{ asset('dexiee/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('dexiee/js/jquery.magnific-popup.min.js') }}"></script>
    <script>
      $(document).ready(function () {
        // Magnific Pop up
        // https://dimsemenov.com/plugins/magnific-popup/
        $('.tm-gallery').magnificPopup({
          delegate: 'a', // child items selector, by clicking on it popup will open
          type: 'image',
          gallery: {
            enabled: true
          },
        });
      });
    </script>

    


  </div>
</body>

</html>