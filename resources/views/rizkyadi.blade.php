<!DOCTYPE html>
<html>
  <head>
    <title>Rizky Adinugraha - Frontend dev</title>
    <meta charset="utf-8" />
    <meta lang="en" />
    <meta name="author" content="Rizky Adinugraha" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="rizkynugraha/images/Iconslogo/rsz_logo_1-150x150.png" />
    <!--The below code is for importing google web fonts in html-->
    <!-- Poppins fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- css js source -->
    <link href="rizkynugraha/style.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/workslider.css" type="text/css" />
    <script src="rizkynugraha/main.js" type="text/javascript"></script>
  </head>
  <style>
    /*Internal CSS*/
    #time {
      float: right;
      font-size: 30px;
      margin: 10px;
      font-family: 'Poppins', sans-serif;
      margin-right: 20px;
      font-weight: bold;
    }
    @media only screen and (max-width: 800px) {
      #greet {
        visibility: hidden;
      }
      #time {
        margin: auto;
        font-family: 'Poppins', sans-serif;
      }
    }
    #greet {
      font-size: 25px;
      position: absolute;
      left: 44.2%;
      top: 2%;
      font-weight: bold;
      font-family: 'Poppins', sans-serif;
    }

    #center {
      text-align: center;
      padding: 30px;
    }
    html,body{
          background:#000;
          margin:0;
      }
      .centered{
          width:400px;
          height:400px;
          position:absolute;
          top:50%;
          left:50%;
          transform:translate(-50%,-50%);
          background:#000;
          filter: blur(10px) contrast(20);
      }
      .circle-1,.circle-2{
          width:70px;
          height:70px;
          position:absolute;
          background:#fff;
          border-radius:50%;
          top:50%;left:50%;
          transform:translate(-50%,-50%);
      }
      /*
      The below code will animate the circle balls using css animation
      */
      .circle-1{
          left:20%;
          animation:osc-l 1.5s ease-in infinite;
          background-color: #fff;
      }
      .circle-2{
          left:80%;
          animation:osc-r 1.5s ease-in infinite;
          background: #2b2;
      }
      @keyframes osc-l{
          0%{left:20%;}
          50%{left:50%;}
          100%{left:20%;}
      }
      @keyframes osc-r{
          0%{left:80%;}
          50%{left:50%;}
          100%{left:80%;}
      }

      .text h1{
          color: aliceblue;
          top: 55%;
          position: absolute;
          left: 45%;
          font-weight: bold;
      }
      .text h1:after{
          content: ".";
          position: absolute;
          animation: caret infinite;
          animation-duration: 1.5s;
          animation-timing-function: steps(20, end);
      }
      @keyframes caret {
          0%, 100% {
            opacity: 0;
          }
          50% {
            opacity: 1;
          }
        }
  </style>
  <body>
    <!--Header Section-->
    <div class="header">
      <!--Inline css in below line-->
      <span
        style="font-size: 40px; cursor: pointer; margin-left: 10px"
        onclick="openNav()"
        id="open"
        >&#9776;
      </span>
      <!-- <a href="home.html"><img src="rizkynugraha/images/Iconslogo/perlogo.png" /></a> -->
      <span class="greeting" id="greet"></span>
      <span id="time"></span>
    </div>

    <!--Navigation Section-->
    <div id="myNav" class="navbar">
      <a
        href="javascript:void(0)"
        class="closebtn"
        onclick="closeNav()"
        id="close"
        >&times;</a
      >
      <div class="navbar-content">
        <a href="#home" id="active">My Portofolio</a>
        <!-- <a href="resume.html">CV</a>
        <a href="blog.html">Blog</a>
        <a href="contact.html">Contact</a> -->
      </div>
    </div>

    <!--Banner Section-->
    <div class="banner-area" id="home">
      <div class="title-image"></div>
      <div class="title-name">
        <p class="name">
          <span id="iden-name"></span><br />
          <span class="subtitle1" id="subtitle1">UI/UX Designer</span>
          <span class="subtitle2" id="subtitle2"
            >Frontend &nbsp;Developer</span
          >
        </p>
      </div>
    </div>

    <!--Services Section-->
    <div class="service-area" id="services">
      <div class="text-part">
        <h1 id="center" >What can I do?</h1>
        <div class="container">
          <div class="box">
            <div class="icon"></div>
            <div class="content">
              <h3>Website Development</h3>
              <p>
                Can design, and develop attractive, secure, fast, multi
                functional and responsive websites for organization or
                individuals according to users requirement.
              </p>
            </div>
          </div>
          <div class="box">
            <div class="icon"></div>
            <div class="content">
              <h3>Mobile App Development</h3>
              <p>
                Can create native, smooth, user friendly application for android
                and IOS devices and publish them in Google Play Store and App
                Stores.
              </p>
            </div>
          </div>
          <div class="box">
            <div class="icon"></div>
            <div class="content">
              <h3>UI/UX Designer</h3>
              <p>
                The daily responsibilities of a UX/UI designer depend on the kinds of projects they work on, the company, team size, and priorities. While some designers focus on tangible products such as mobile apps or VR devices.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Who do I work with, Section-->
    <div class="corpwork-area" id="corpwork">
      <div class="text-part">
        <!--Aligning header to center using inline css-->
        <h1 style="text-align: center">My Education History</h1>
        <center>
          <div class="imgrel fade">
            <img style="border-radius: 100px;" src="rizkynugraha/images/Iconslogo/tk-pb.jpg" />
            <p>TK Permata Bunda</p>
          </div>

          <div class="imgrel fade">
            <img style="border-radius: 100px;" src="rizkynugraha/images/Iconslogo/logo-pj.png" />
            <p>SD Putra Jaya</p>
          </div>

          <div class="imgrel fade">
            <img style="border-radius: 100px;" src="rizkynugraha/images/Iconslogo/logo-alhe.png" />
            <p>SMP-IT Al-Hikmah</p>
          </div>

          <div class="imgrel fade">
            <img style="border-radius: 100px;" src="rizkynugraha/images/Iconslogo/logo-tb.jpg" />
            <p>SMK Taruna Bhakti</p>
          </div>
        </center>

        <div style="text-align: center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
        </div>
      </div>
    </div>

    <!--About Section-->
    <div class="about-area" id="about">
      <div class="text-part-abt">
        <h1 style="text-align: center; padding-bottom: 10px">
          <span
            style="
              font-size: 80px;
              text-decoration: none;
              border-bottom: 2px solid rgb(230, 173, 30);
              color: rgb(230, 173, 30);
            "
            >A</span
          >bout Me
        </h1>
        <div class="about">
          <div class="abt-content">
            <div class="rem-part">
              <div class="social-media">
                <div class="icons">
                  <a
                    href="https://www.facebook.com/bobob.s.94"
                    target="
                            "
                    ><img src="rizkynugraha/images/Iconslogo/facebook.png"
                  /></a>
                  <a href="https://github.com/Rizkydi" target="_blank"
                    ><img src="rizkynugraha/images/Iconslogo/logo-github.png"
                  /></a>
                  <a
                    href="https://www.instagram.com/invites/contact/?i=1283kvc7u94ss&utm_content=4rlf68r"
                    target="_blank"
                    ><img src="rizkynugraha/images/Iconslogo/instagram.png"
                  /></a>
                </div>
              </div>
              <div class="left-part">
                <span class="h2"
                  >I'm
                  <span style="color: orangered">Rizky Adinugraha</span></span
                ><br />
                <span class="h3">Developer, Freelancer & Programmer</span>
                <hr />
                <p style="font-size: 25px">
                  I am currently being studied in SMK taruna bhakti. Start into programmer when in 2019,  my work is published on github and instagram. I had worked with many people and organizations. I enjoy designing and coding mobile applications, websites, surfing and freelancing.
                </p>
              </div>
              <div class="abt-btn">
                <button
                style="display: none;"
                  type="button"
                  onclick="window.location.href='resume.html';"
                  class="button1"
                >
                  View My CV
                </button>
                <button
                style="display: none;"
                  type="button"
                  onclick="window.location.href='#contact';"
                  class="button2"
                >
                  Hire Me
                </button>
              </div>
            </div>
            <div class="img-part">
              <div class="img"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Testimonial Section-->
    <div class="skill-section" id="skill-section">
      <h2 style="margin-left: 500px;">My Skills & Abilities</h2>
       <div class="skill-part">
       <div class="prgm-skill">
       <h2>Programming</h2>
           <p>Java</p>
           <div class="container-skill">
             <div class="skills java">60%</div>
           </div>
           <p>Dart</p>
           <div class="container-skill">
             <div class="skills dart">55%</div>
           </div>
           <p>Javascript</p>
           <div class="container-skill">
             <div class="skills js">60%</div>
           </div>
           <p>PHP</p>
           <div class="container-skill">
             <div class="skills php">50%</div>
           </div>
           <p>MySQL</p>
           <div class="container-skill">
             <div class="skills sql">70%</div>
           </div>
       </div>
       
       <div class="design-skill">
          <h2>Designing</h2>
           <p>HTML</p>
           <div class="container-skill">
             <div class="skills html">90%</div>
           </div>
           
           <p>CSS</p>
           <div class="container-skill">
             <div class="skills css">80%</div>
           </div>
           <p>Bootstrap</p>
           <div class="container-skill">
             <div class="skills bootstrap">70%</div>
           </div>
           <p>Photoshop</p>
           <div class="container-skill">
             <div class="skills photoshop">75%</div>
           </div>
           <p>Premiere Pro</p>
           <div class="container-skill">
             <div class="skills prepro">50%</div>
           </div>
       </div>
   </div>
   </div> 
</div>
</div>
</div>
</div>
    <!-- <div class="divider"></div>
    <div class="contact-area" id="contact">
      <div class="text-part">
        <h1>Contact Me</h1>
        <div class="cont-form">
          <form onsubmit="return validateForm()">
            <input type="text" id="name" placeholder="Name *" /><br />
            <input type="text" id="email" placeholder="Email *" />
            <input type="text" id="subject" placeholder="Subject *" /><br />
            <input
              type="text"
              placeholder="Phone No (Optional)"
              id="phone"
            /><br />
            <textarea id="message" placeholder="Message *"></textarea><br />
            <button type="submit" id="btn-submit">Send</button>
          </form>
        </div>
      </div>
    </div> -->
    <!--This is for playing alert sound-->
    <audio id="alert" src="sound/alerts.mp3" preload="auto"></audio>
    <audio id="success" src="sound/success.mp3" preload="auto"></audio>

    <div class="cta hide" id="goup">
      <a href="#home"><img src="rizkynugraha/images/Iconslogo/arrup.png" /></a>
    </div>

    <!--Copyright Information-->
    <div class="copyright">
      <p>
        &copy; 2022
        <a href="">Rizky Adinugraha</a>
      </p>
    </div>
    <script>
      //handles goup button
      myID = document.getElementById("goup");

      var myScrollFunc = function () {
        var y = window.scrollY;
        if (y >= 800) {
          myID.className = "cta show";
        } else {
          myID.className = "cta hide";
        }
      };
      window.addEventListener("scroll", myScrollFunc);

      //The below line dynamically change the name in banner area.
      document.getElementById("iden-name").innerHTML = "Rizky Adinugraha";

      /*
                The below code is used to slide/change image infinitely using for loop.
                A single image will be available only for 2.5s and after that it automatically changes another image
            */
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("imgrel");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2500);
      }

      //The below is used to make navigation bar sticky
      //when we scroll up the navigation bar will stick on top of page
      window.onscroll = function () {
        stickFunction();
      };
      var navbar = document.getElementById("myNav");
      var sticky = navbar.offsetTop;

      function stickFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky");
        } else {
          navbar.classList.remove("sticky");
        }
      }
    </script>
  </body>
</html>
