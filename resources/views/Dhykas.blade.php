<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dhykas/css/dhyka.css">

    <link rel="icon" type="image/x-icon" href="Dhykas/img/icon.PNG">
    <title>Dhyka's Page</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>

<body>
    
    
        <!-- navbar -->
        <nav id="nav" class="bgblack">
            <!-- logo -->
            <img class="logo" src="Dhykas/img/logo.png" alt="">

            <!-- links -->
            <div class="links">

                <a class="click a twhite">Home</a>
                <a class="click a twhite">About</a>
                <a class="click a twhite">Blog</a>
                <!-- contact -->
                <a onclick="drop()" class="click a twhite">Contact</a>

                <div id="drop" class="none">
                    <p onclick="sm1()">github</p>
                    <p onclick="sm2()">instragram</p>
                    <p onclick="sm3()">youtube</p>
                    <p onclick="sm4()">gmail</p>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div class="content">
            <!-- hero -->
            <div class="hero">
                <div data-aos="fade-up" class="teks-hero twhite">
                    <p cla>Hello,</p>
                    <h1>I'M Andhika Saputra </h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        <br> Iure, tempore nam vero asperiores praesentium ad placeat mollitia repellendus.</p>
                </div>

                <img data-aos="fade-left" class="img-hero" src="Dhykas/img/WhatsApp Image 2022-11-03 at 16.32.52.jpeg" alt="">

            </div>


        </div>

        <!-- skills -->
        <div data-aos="fade-right" class="skills ">
            <div class="skill-img">
                <img class="img" src="Dhykas/img/image 2 (2).png" alt="">
                <img class="img" src="Dhykas/img/image 3.png" alt="">
                <img class="img" src="Dhykas/img/image 5 (1).png" alt="">
            </div>
            <h1 id="line1" class="borderb">Skills</h1>

            <h3>I Have all basic skill to start a web developer <br>such as html,css,javascript,php,etc.</h3>

        </div>
        <!-- project -->
        <div data-aos="fade-left" class="simple">
            <h1 id="line2" class="borderb">Simple Things i Can do</h1>

            <!-- darkmode -->
            <div id="a" class="darkmode">

                <button onclick="darkest()" id="btnd" class="btn dark">Dark Mode</button>

            </div>




        </div>

        <!-- Footer -->

        <footer id="footer">
            <p id="foott">©CopyRight by Andhika <span>Since 2022</span></p>
        </footer>

    

    <!-- aos -->
    <script>
        AOS.init({
            // Global settings:
            disable: false,
            startEvent: 'DOMContentLoaded',
            initClassName: 'aos-init', 
            animatedClassName: 'aos-animate', 
            useClassNames: false, 
            disableMutationObserver: false, 
            debounceDelay: 50, 
            throttleDelay: 99, 
            
        
            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, 
            delay: 0, 
            duration: 1000, 
            easing: 'ease', 
            once: false, 
            mirror: false, 
            anchorPlacement: 'top-bottom',
        
        });
        </script>


    <script>



        // var
        var tes = document.getElementById("tes")
        var h1 = document.getElementById("h1")

        function load(){
            setInterval(pe, 150)
        }

        function pe() {
            tes.style.display = "block"
            h1.style.display = "none"
        }

        // project dark mode
        function darkest() {
            // var
            let a = document.getElementById("a")
            let btnd = document.getElementById("btnd")
            let nav = document.getElementById("nav")
            let line1 = document.getElementById("line1")
            let line2 = document.getElementById("line2")
            let foot = document.getElementById("footer")
            let foott = document.getElementById("foott")
            let link = document.getElementsByClassName("a")


            line1.classList.toggle("borderw")
            line2.classList.toggle("borderw")

            link[0].classList.toggle("tblack")
            link[1].classList.toggle("tblack")
            link[2].classList.toggle("tblack")
            link[3].classList.toggle("tblack")
            a.classList.toggle("dark");
            nav.classList.toggle("bgblack");
            nav.classList.toggle("bgwhite");
            a.classList.toggle("borderw2");
            btnd.classList.toggle("dark");
            document.body.classList.toggle("dark");

            foot.classList.toggle("bgwhite")
            foott.classList.toggle("tblack")
        }

        function sm1() {
            window.open('https://github.com/dhykas');
        }

        function sm2() {
            window.open('https://www.instagram.com/_dhykas/');
        }

        function sm3() {
            window.open('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
        }

        function sm4() {
            window.open('http://www.gmail.com');
        }

        var dropp = document.getElementById("drop")

        function drop() {
            dropp.classList.toggle("none")
        }
    </script>
</body>

</html>