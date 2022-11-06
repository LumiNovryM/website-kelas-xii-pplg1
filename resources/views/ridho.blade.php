<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link css -->
    <link rel="stylesheet" href="{{ asset('ridhoo/assets/css/style.css') }}">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Zerone Site</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="nav">
        <!-- Left -->
        <div class="left">
            <img src="" alt="">
            <p>Ridho Rizqi</p>
        </div>

        <!-- toggle -->
        

        <!-- Right -->
        <div class="right">
            <ul >
                <li><a href="#home" class="list">Home</a></li>
                <li><a href="#about" class="list">About</a></li>
                <li><a href="#project" class="list">Project</a></li>
                <li><a href="#contacts" class="list">Contacts</a></li>
            </ul>
            <div class="switch">
                <input type="checkbox" class="toggle" id="toggle">
                <label for="toggle" class="label">
                    <ion-icon name="moon" class="moon"></ion-icon>
                    <ion-icon name="sunny" class="sun"></ion-icon>
                    <div class="circle"></div>
                </label>
            </div>
        </div>
    </nav>

    <!-- Hero -->
   <div class="hero" id="home" >

        <div class="hero_kiri" data-aos="fade-right" data-aos-duration="2000">
            <div class="text" >
                <p>Hello,</p>
                <h1 >I'AM RIDHO RIZQI PAMBUDI</h1>
                <p >I'am a <span>student</span></p>
                <a href="{{ asset('ridhoo/assets/img/white.png') }}" class="btn_cv" download="cv.png">Download CV</a>
            </div>
            <div class="social_media">
                <p>Follow My Soical Media</p>
                <div class="icon">
                    <a href="https://www.instagram.com/rdhoo_do" class="a" target="_blank"><ion-icon name="logo-instagram" id="ig" class="sosmed"></ion-icon></a>
                    <a href="https://github.com/ZeroneDoo" class="a" target="_blank"><ion-icon name="logo-github" id="github" class="sosmed"></ion-icon></a>
                    <a href="" class="a" target="_blank"><ion-icon name="logo-youtube" id="youtube" class="sosmed"></ion-icon></a>
                    <a href="" class="a" target="_blank"><ion-icon name="logo-facebook" id="facebook" class="sosmed"></ion-icon></a>
                </div>
            </div>
        </div>

        <div class="hero_kanan" data-aos="fade-left" data-aos-duration="2000">
            <div class="image">
                <img src="{{ asset('ridhoo/assets/img/bg_hero3.png') }}" alt="">
            </div>
        </div>

   </div>

   <!-- About -->
   <div class="about" id="about"  data-aos="fade-up" data-aos-duration="2000">

        <div class="title_about">
            <h2 data-aos="fade-up" data-aos-duration="1000">About Me</h2><br>
            <div class="text_about" data-aos="fade-up" data-aos-duration="2000">
                <p>My name is Ridho Rizqi Pambudi, i'am a student from Taruna Bhakti Vocational High School. I'am Beginner programmer, ready to start a new experience into the programming world. </p> <p> I love to learn a new thing about programming and i love to create a new project about backend developer and frontend developer, i usually make a personal project or with my team, .</p> <p> I'm ready to make some new project or adding experience in programming world. </p>
            </div>
        </div>

        <!-- Skills -->
        <div class="skills" >

            <div data-aos="fade-up" data-aos-duration="1000">
                <label for="">HTML</label>
                <div class="skills1" >
                    <div class="bar1" id="bar1"></div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="2000">
                <label for="">CSS</label>
                <div class="skills2">
                    <div class="bar2"></div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="2000">
                <label for="">JS</label>
                <div class="skills3">
                    <div class="bar3"></div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="2000">
                <label for="">PHP</label>
                <div class="skills4">
                    <div class="bar4"></div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="2000">
                <label for="">LARAVEL</label>
                <div class="skills5">
                    <div class="bar5"></div>
                </div>
            </div>

        </div>
    </div>

    <!-- Project -->
    <div class="project" id="project">

        <h2>My Project</h2>
        <p>These are some of project i made when i was in school </p>
        <div class="scroll_card1">
            <div class="card" data-aos="fade-right" data-aos-duration="2900"></div>
            <div class="card" data-aos="fade-right" data-aos-duration="2000"></div>
            <div class="card" data-aos="fade-left" data-aos-duration="2000"></div>
            <div class="card" data-aos="fade-left" data-aos-duration="2900"></div>
        </div>

        <!-- other -->
        <p class="other" id="other" onclick="down()">See More <ion-icon name="caret-down-circle-outline"></ion-icon></p>

        <div class="scroll_card2" id="scroll_card2">
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
    </div>

    <!-- Team -->
    <div class="team">
        <h2 data-aos="fade-up" data-aos-duration="2000">My Team</h2>
        <div class="list_team" data-aos="fade-up" data-aos-duration="2000">
            <div class="card1" data-aos="fade-right" data-aos-duration="3000" >
                <div class="card_team"></div>
                <p>Kanny Indira B.0</p>
            </div>
            <div class="card2" data-aos="fade-up" data-aos-duration="2000">
                <div class="card_team"></div>
                <p>Tsaqif Maulana A.L.</p>
            </div>
            <div class="card3" data-aos="fade-up" data-aos-duration="2000">
                <div class="card_team"></div>
                <p>Fathir Akmal B.</p>
            </div>
            <div class="card4" data-aos="fade-left" data-aos-duration="3000">
                <div class="card_team"></div>
                <p>Muhammad Andhika S.</p>
            </div>
        </div>
    </div>

    <!-- Contacts -->

    <div class="contact" id="contacts">

        <!-- Left contact -->
        <div class="left_contact">
            <div class="card_contact">
                <h1 data-aos="fade-right" data-aos-duration="2000">Contact Me </h1>

                <div class="phone" data-aos="fade-right" data-aos-duration="2500">
                    <ion-icon name="call-outline"></ion-icon>
                    <p>+62 896-5507-2360</p>
                </div>

                <div class="email" data-aos="fade-right" data-aos-duration="2500">
                    <ion-icon name="mail-outline"></ion-icon>
                    <p>ridhorizqi09@gmail.com</p>
                </div>

                <div class="location" data-aos="fade-right" data-aos-duration="2500">
                    <ion-icon name="location-outline"></ion-icon>
                    <p>SMK TARUNA BHAKTI DEPOK</p>
                </div>

            </div>
        </div>
        <!-- Right contact -->
        <div class="right_contact">
    
            <div class="card_contact" data-aos="zoom-in" data-aos-duration="2000">
    
                <!-- form -->
                <form action="">
                    <table cellpadding="10" cellspacing="0">
    
                        <tr>
                            <td><input type="text" name="nama" placeholder="Your Name"></td>
                        </tr>
    
                        <tr>
                            <td><input type="email" name="email" placeholder="Your Email"></td>
                        </tr>
    
                        <tr>
                            <td><textarea name="message" id="" cols="55" rows="10" placeholder="Your Message"></textarea></td>
                        </tr>
                        <tr>
                            <td><button type="submit" class="btn_contact">Send Message</button></td>
                        </tr>
                    </table>
                </form>
            
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer" >
        <!-- left -->
        <div class="left_footer">
            <div class="logo_footer">
                <img src="" alt="">
            </div>
            <h2>Ridho Rizqi <span>Pambudi</span></h2>

        </div>            

        <hr>
        <p>&copy; 2022 Developed by Ridho Rizqi Pambudi - Portofolio Web</p>
    </footer>

</body>

<!-- Main -->
<script src="{{ asset('ridhoo/assets/js/script.js') }}"></script>
<!-- icon -->
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>