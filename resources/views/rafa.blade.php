<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mystery Code</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="/rafansyah/assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="/rafansyah/assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="/rafansyah/assets/images/Avatar.jpg" alt="Richard hanrick" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="">RAFANSYAH</h1>

          <p class="title">UI/UX Designer</p><br>
          <p class="title">Web developer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:rafansyah.209@gmail.com" class="contact-link">rafansyah.209@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+62821010697990" class="contact-link">+62-821-1069-7990</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="2005-09-02">September 02, 2005</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Depok, Kelapa Dua, Indonesia</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="https://www.facebook.com/rafansyah.rafa.94" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://twitter.com/xiiiraf" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.instagram.com/rafaaa24_/?hl=id" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            I'm Web Developer and UI/UX Designer from Indonesia
            turning complex problems into simple, beautiful and intuitive designs.
          </p>

          <p>
            My job is to build your website so that it is functional and user-friendly but at the same time attractive.
            Moreover, I
            add personal touch to your product and make sure that is eye-catching and easy to use. My aim is to bring
            across your
            message and identity in the most creative way. I created web design for many famous brand companies.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="/rafansyah/assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  The most modern and high-quality design made at a professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="/rafansyah/assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  High-quality development of sites at the professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="/rafansyah/assets/images/icon-photo.svg" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Photography</h4>

                <p class="service-item-text">
                  I make high-quality photos of any category at a professional level.
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <!-- <h3 class="h3 testimonials-title">Testimonials</h3> -->

          <ul class="testimonials-list has-scrollbar">

            <!-- <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel lewis</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica miller</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily evans</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.png" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry william</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li> -->

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="/rafansyah/assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="/rafansyah/assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

          <!-- <h3 class="h3 clients-title">Clients</h3> -->

          <ul class="clients-list has-scrollbar">

            <!-- <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-1-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-2-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-3-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-4-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-5-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-6-color.png" alt="client logo">
              </a>
            </li> -->

          </ul>

        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">SMK TARUNA BHAKTI</h4>

              <span>2021 — NOW</span>

              <p class="timeline-text">
                <!-- Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et
                quas molestias
                exceptur. -->
              </p>

            </li>

            <!-- <li class="timeline-item">

              <h4 class="h4 timeline-item-title">New york academy of art</h4>

              <span>2006 — 2007</span>

              <p class="timeline-text">
                Ratione voluptatem sequi nesciunt, facere quisquams facere menda ossimus, omnis voluptas assumenda est
                omnis..
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">High school of art and design</h4>

              <span>2002 — 2004</span>

              <p class="timeline-text">
                Duis aute irure dolor in reprehenderit in voluptate, quila voluptas mag odit aut fugit, sed consequuntur
                magni dolores
                eos.
              </p>

            </li> -->

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <!-- <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Creative director</h4>

              <span>2015 — Present</span>

              <p class="timeline-text">
                Nemo enim ipsam voluptatem blanditiis praesentium voluptum delenit atque corrupti, quos dolores et qvuas
                molestias
                exceptur.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Art director</h4>

              <span>2013 — 2015</span>

              <p class="timeline-text">
                Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et
                quas molestias
                exceptur.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Web designer</h4>

              <span>2010 — 2013</span>

              <p class="timeline-text">
                Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et
                quas molestias
                exceptur.
              </p>

            </li> -->

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web design</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Graphic design</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Branding</h5>
                <data value="90">65%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 65%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>
            
            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li>
            
            <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>Applications</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="https://www.instagram.com/p/Cg4R7ZzvMlF/?hl=id">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="/rafansyah/assets/images/Instagram post - 1.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">R Outdoor</h3>

                <p class="project-category">Web Design</p>

              </a>
            </li>

            <!-- <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-2.png" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">Orizon</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Fundo</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Brawlhalla</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">DSM.</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">MetaSpark</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">Summary</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Task Manager</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Arrival</h3>

                <p class="project-category">Web development</p>

              </a>
            </li> -->

          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">

          <!-- <ul class="blog-posts-list">

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-1.jpg" alt="Design conferences in 2022" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                  <p class="blog-text">
                    Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-2.jpg" alt="Best fonts every designer" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                  <p class="blog-text">
                    Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #80</h3>

                  <p class="blog-text">
                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-4.jpg" alt="UI interactions of the week" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                  <p class="blog-text">
                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-5.jpg" alt="The forgotten art of spacing" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                  <p class="blog-text">
                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #79</h3>

                  <p class="blog-text">
                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                  </p>

                </div>

              </a>
            </li>

          </ul> -->

        </section>

      </article>





      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.3155168365199!2d106.84480902918048!3d-6.360117199712336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec6a7132a983%3A0xc66711d0690c0512!2sJl.%20H.%20Salim%20No.46%2C%20Tugu%2C%20Kec.%20Cimanggis%2C%20Kota%20Depok%2C%20Jawa%20Barat%2016451!5e0!3m2!1sid!2sid!4v1667467487044!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="/rafansyah/assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>