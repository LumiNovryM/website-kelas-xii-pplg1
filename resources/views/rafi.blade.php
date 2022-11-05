<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="jame/library.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="UC9G9f6016dmelLeyiQYQMaXb65XsYclQN7jBhmPjO0" />

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap');

    body {
      font-family: 'Roboto', sans-serif;
      /* background-color: rgb(212, 243, 252); */
    }

    .navbar {
      background: #0e1c42;
      background-size: 600% 600%;
    }

    @-webkit-keyframes AnimationName {
      0% {
        background-position: 0% 50%
      }

      50% {
        background-position: 100% 50%
      }

      100% {
        background-position: 0% 50%
      }
    }

    @-moz-keyframes AnimationName {
      0% {
        background-position: 0% 50%
      }

      50% {
        background-position: 100% 50%
      }

      100% {
        background-position: 0% 50%
      }
    }

    @keyframes AnimationName {
      0% {
        background-position: 0% 50%
      }

      50% {
        background-position: 100% 50%
      }

      100% {
        background-position: 0% 50%
      }
    }


    .jumbotron {
      /* background: linear-gradient(306deg, #2e0522, #03142c); */
      background-size: 400% 400%;
      padding-top: 8rem;
      padding-bottom: 4rem;
      -webkit-animation: Animasi 4s ease infinite;
      -moz-animation: Animasi 4s ease infinite;
      -o-animation: Animasi 4s ease infinite;
      animation: Animasi 5s ease infinite;
    }

    @-webkit-keyframes Animasi {
      0% {
        background-position: 0% 50%
      }

      50% {
        background-position: 100% 50%
      }

      100% {
        background-position: 0% 50%
      }
    }

    @-moz-keyframes Animasi {
      0% {
        background-position: 0% 50%
      }

      50% {
        background-position: 100% 50%
      }

      100% {
        background-position: 0% 50%
      }
    }

    @-o-keyframes Animasi {
      0% {
        background-position: 0% 50%
      }

      50% {
        background-position: 100% 50%
      }

      100% {
        background-position: 0% 50%
      }
    }

    @keyframes Animasi {
      0% {
        background-position: 0% 50%
      }

      50% {
        background-position: 100% 50%
      }

      100% {
        background-position: 0% 50%
      }
    }

    #about {
      margin-top: 8rem;
    }

    .portfolio {
      margin-top: 6.3rem;
    }

    #gallery {
      text-align: center;
    }

    section {
      padding-top: 6rem;
    }

    #contact {
      margin-top: 2rem;
      margin-bottom: 2rem;
    }

    a:hover {
      text-decoration: none;
    }

    .section-padding {
      padding-top: 4rem;
      padding-bottom: 4rem;
      margin-top: 6rem;
    }

    .bottom {
      margin-top: 4rem;
      background-color: #0e1c42;
    }

    .bottom .copyright {
      color: #e5e5e5;
      font-weight: 600;
    }

    .copyright a {
      color: #f2ff49;
      margin-left: 3px;
      padding-right: 3px;
    }

    .bottom p {
      margin-bottom: 0;
      line-height: 50px;
      font-size: 16px;
      font-weight: 400;
    }

    .copyright p span {
      color: #d1caca;
    }

    .bottom .copyright p,
    .bottom .copyright a:hover {
      color: #6c6d83;
    }
  </style>
  <title> Jame | Portfolio</title>
</head>

<body>


  <!-- Bagian Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Muhammad Rafi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link active" href="#about">About</a>
          <!-- <a class="nav-link active" href="#portfolio">Portfolio</a> -->
          <!-- <a class="nav-link active" href="#appsgallery">Apps</a> -->
          <a class="nav-link active" href="#contact">Contact</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Jumbotron -->
  <section class="jumbotron text-center ">
    <img src="jame/img/foto2.jpg" alt="" width="250" class="rounded-circle" />
    <div class="mt-3 py-2">
      <h1 data-aos="fade-down" class="animate__bounce display-4">Muhammad Rafi</h1>
      <h5 data-aos="fade-up" class="animate__bounce lead">Mentor | It Specialist | Fullstack Dev</h5>
    </div>

    
  </section>
  <!-- About Page -->
  <section id="about" class="py-6">
    <div class="container" data-aos="zoom-in-down">
      <div class="row text-center">
        <div class="col">
          <h2>About me as a developer</h2>
        </div>
        <div class="row justify-content-center" style="margin-top: 3rem;">
          <div class="col-md-3 mt-6">
            <img src="jame/img/foto2.jpg" alt="Picture For About Me" width="200"
              style="border-radius: 3.5%; margin-bottom:3em;">
          </div>
          <div class="col-md-6 mt-6">


            <h6 style="text-align: left;">
              I was born in Bali, on May 29, 2005 but now I live in Depok, West Java. One of my hobbies
                i will do in my future is Programming And Website Designing with others like follow and
                organization at my school. My other hobby is reading books. I like reading like History
                computers and mathematics. I also like reading novels. Every weekend I always open a website that sells e-books.
                After that, my newest hobby is playing video games, it's very interesting for me because the first one
                the time i used my old computer was to play games and then i got interested in starting to learn to program.
            </h6>


          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Page -->

  <!-- <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="titleGallery mb-4 mt-2">
            <center>
              <h2>Web & Library</h2>
              <hr width="300px">
            </center>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left">
              <img src="#/content/1.png" class="card-img-top" alt="Kultech">
              <div class="card-body">
                <h6 class="card-text">Kultech.id</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-right">
              <img src="#/content/2.jpg" class="card-img-top" alt="Connect">
              <div class="card-body">
                <h6 class="card-text">Connect Chatapp</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left">
              <img src="#/content/3.png" class="card-img-top" alt="CWA">
              <div class="card-body">
                <h6 class="card-text">CWA Startup</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-right">
              <img src="#/content/4.png" class="card-img-top" alt="Seraboetan">
              <div class="card-body">
                <h6 class="card-text">Seraboetan Page</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-left">
              <img src="#/content/5.png" class="card-img-top" alt="Sukamaju Gallery">
              <div class="card-body">
                <h6 class="card-text">Sukamaju Gallery</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="flip-right">
              <img src="#/content/6.png" class="card-img-top" alt="Toko Baju">
              <div class="card-body">
                <h6 class="card-text">Rest Shirt</h6>
              </div>
            </div>
          </div>
        </div>
  </section>

  <section id="appsgallery" style="margin-top: 3rem;">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="titleGallery mb-4 mt-2">
            <center>
              <h2 class="text-center">Application's </h2>
              <hr width="300px">
            </center>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="card" data-aos="zoom-in-down">
              <img src="#/content/7.png" class="card-img-top" alt="Mac-1">
              <div class="card-body">
                <h5 class="card-title">Make It</h5>
                <h6 class="card-text">Set your workflow using todo list apps </h6> <br>
                <a href="https://todo-apps-blush.vercel.app/" class="btn btn-primary">Go To Apps</a> <br>
                <a href="https://github.com/itsmebroarif/todo-apps" class="btn btn-primary mt-2">Download Apps</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3 mt-1">
            <div class="card" data-aos="zoom-in-down">
              <img src="#/content/8.png" class="card-img-top" alt="Mac-2">
              <div class="card-body">
                <h5 class="card-title">Cashy</h5>
                <h6 class="card-text">Calculate your money using cashy.</h6>
                <a href="https://cashy-pwa.vercel.app/" class="btn btn-primary">Go To Apps</a> <br>
                <a href="https://github.com/itsmebroarif/todo-apps" class="btn btn-primary mt-2">Download Apps</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" data-aos="zoom-in-down">
              <img src="#/content/9.png" class="card-img-top" alt="Mac-3">
              <div class="card-body">
                <h5 class="card-title">Connect Chat</h5>
                <h6 class="card-text">Open source apps for contact manager .</h6>
                <a href="https://contact-form-ten-liard.vercel.app/" class="btn btn-primary">Go To Apps</a> <br>
                <a href="https://github.com/itsmebroarif/contact-form" class="btn btn-primary mt-2">Download Apps</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Notification Content -->
  <!-- </section> -->

  <!-- Contact -->
  <section id="contact">
    <div class="container" data-aos="fade-up" data-aos-duration="3000">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Terima kasih!</strong> Pesan anda sudah kami terima. <br>
            Tunggu Respon Kalian di email ya !!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <form name="feedback-form">
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input autocomplete="off" placeholder="Masukan Nama Mu Disini" required type="text" class="form-control" id="name"
                aria-describedby="name" name="nama" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input autocomplete="off" placeholder="Masukan Email Mu" required type="email" class="form-control" id="email"
                aria-describedby="email" name="email" />
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea placeholder="Isi Pesan Mu Disini" required class="form-control" id="pesan" rows="3"
                name="pesan"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-kirim">Kirim Pesan</button>
            <button class="btn btn-primary btn-loading d-none" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Mengirim...
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bottom section-padding" style="border-radius:12px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="copyright">
            <h5>© <span>2022</span> <a href="#" class="transition">Code With Jame</a>
              All rights reserved.</h5>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js">
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    const scriptURL =
      'https://script.google.com/macros/s/AKfycbxiDRozzRxwdXM21IctWpX0wcC9XeXIzhVHSQEnm2s1ElLwlxZhkccGf5LKNhECA01j_Q/exec'
    const form = document.forms['feedback-form']
    const btnKirim = document.querySelector('.btn-kirim');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      // ketika tombol submit diklik
      // tampilkan tombol loading, hilangkan tombol kirim
      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');
      fetch(scriptURL, {
          method: 'POST',
          body: new FormData(form)
        })
        .then((response) => {
          // tampilkan tombol kirim, hilangkan tombol loading
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
          // tampilkan alert
          myAlert.classList.toggle('d-none');
          // reset formnya
          Swal.fire({
              icon: 'success',
              title: 'Berhasil Dikirim !',
              text: 'Pesan Dikirim Ke Developer!',
              footer: '<a href="https://github.com/JameTDR">Info Developer?</a>'
            })
          form.reset();
          console.log('Success!', response);
        })
        .catch((error) => console.error('Error!', error.message));

    });
  </script>

  <script>
    AOS.init();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
</body>

</html>