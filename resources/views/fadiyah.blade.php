<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    <link rel="icon" href="{{asset('fadiyahputri/img/favicon.ico')}}" type="{{asset('fadiyahputri/img/x-icon')}}">
    <!-- Bootstrap -->
    <link href="{{asset('fadiyahputri/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('fadiyahputri/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('fadiyahputri/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('fadiyahputri/css/aos.css')}}" rel="stylesheet">
    <!-- main style -->
    <link href="{{asset('fadiyahputri/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">

            <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar">
            </div>

        </div>
    </div>
    <!-- ./Preloader -->
    
    <!-- header -->
    <header class="navbar-fixed-top">
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#projects">projects</a></li>
                <li><a href="#student">Student</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- ./header -->
    
    <!-- home -->
    <div class="section" id="home" data-stellar-background-ratio="0.5">
        <div class="container">
            <img class="hero1" src="{{asset('fadiyahputri/img/hero1.png')}}">
            <div class="disply-table">
                <div class="table-cell" data-aos="fade-up" data-aos-delay="0">
                    <h4>Fadiyah Putri</h4>
                    <h1> Ui&<br /> Ux Designer</h1> </div>
            </div>
        </div>
    </div>
    <!-- ./home -->
    
    <!-- about -->
    <div class="section" id="about">
        <div class="container">
            <div class="col-md-6" data-aos="fade-up">
                <h4>01</h4>
                <h1 class="size-50">Know <br /> About me</h1>
                <div class="h-50"></div>
                <p>I am a front end developer named Fadiyah Putri, usually called Padiyah, who lives in Cilodong and I am a high school student who attends SMK Taruna Bhakti Depok.</p>
                <p> I am quite familiar with various software such as Figma, Adobe Photoshop, and Canva, and am used to making mock ups, fire ups, and so on.</p>
                <div class="h-50"></div> <img src="{{asset('fadiyahputri/img/Signature.svg')}}" width="230" alt="" />
                <div class="h-50"></div>
            </div>
            <div class="col-md-6 about-img-div">
                <div class="about-border" data-aos="fade-up" data-aos-delay=".5"></div>
                <img src="{{asset('fadiyahputri/img/hero2-bg.jpg')}}" width="400" class="img-responsive" alt="me" align="right" data-aos="fade-right" data-aos-delay="0" style="margin-top: 16%;" />
            </div>
        </div>
    </div>
    <!-- ./about -->
    
    <!-- MY EDUCATION  -->
    <div class="section" id="education">
        <div class="container">
            <div class="col-md-12">
                <h4>02</h4>
                <h1 class="size-50">My <br> Education</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-12">
                <ul class="timeline">
                    <li class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">2012 - 2018</p>
                            <h3>Primary School</h3>
                            <h4>SDN Cilodong 01</h4>
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".2">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">2018 - 2021</p>
                            <h3>Junior High School</h3>
                            <h4>SMP 06 Depok</h4>
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".4">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">2021 - Until Now (2022)</p>
                            <h3>Vocational High School</h3>
                            <h4>SMK Taruna Bhakti</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./experience -->
    
    <!-- projects -->
    <div class="section" id="projects">
        <div class="container">
            <div class="col-md-12">
                <h4>03</h4>
                <h1 class="size-50">My <br /> Projects</h1> 
            </div>
            <!-- main container -->
            <div class="main-container portfolio-inner clearfix">
                <!-- portfolio div -->
                <div class="portfolio-div">
                    <div class="portfolio">
                        <!-- portfolio_filter -->
                        <div class="categories-grid wow fadeInLeft">
                            <nav class="categories">
                                <ul class="portfolio_filter">
                                    <li><a href="" class="active" data-filter="*">All</a></li>
                                    <li><a href="" data-filter=".photography">Tailwind Web</a></li>
                                    <li><a href="" data-filter=".logo">Game Web</a></li>
                                    <li><a href="" data-filter=".graphics">Animated Web</a></li>
                                    <li><a href="" data-filter=".ads">Team Web</a></li>
                                    <li><a href="" data-filter=".fashion">Tutorial YouTube Web</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- portfolio_filter -->
                        
                        <!-- portfolio_container -->
                        <div class="no-padding portfolio_container clearfix" data-aos="fade-up">
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6  fashion logo">
                                <a id="demo01" href="#animatedModal" class="portfolio_item"> <img src="{{asset('fadiyahputri/img/project/01.png')}}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Animated Text Effect</span> <em>Animated Web / Tutorial YouTube Web</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 ads graphics">
                                <a id="demo02" href="#animatedModal" class="portfolio_item"> <img src="{{asset('fadiyahputri/img/project/03.png')}}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Rendang Login</span> <em>Tutorial YouTube Web </em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 photography">
                                <a id="demo03" href="#animatedModal" class="portfolio_item"> <img src="{{asset('fadiyahputri/img/project/02.png')}}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Video Background Loop</span> <em>Tutorial YouTube Web</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 fashion ads">
                                <a id="demo04" href="#animatedModal" class="portfolio_item"> <img src="{{asset('fadiyahputri/img/project/04.png')}}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Padang Food</span> <em>Tutorial YouTube Web<</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo05" href="#animatedModal" class="portfolio_item"> <img src="{{asset('fadiyahputri/img/project/05.png')}}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 photography">
                                <a id="demo06" href="#animatedModal" class="portfolio_item"> <img src="{{asset('fadiyahputri/img/project/010.png')}}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Photorealistic smartwatch</span> <em>Photography</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo07" href="#animatedModal" class="portfolio_item"> <img src="{{asset('fadiyahputri/img/project/06.png')}}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo08" href="#animatedModal" class="portfolio_item"> <img src="{{asset('fadiyahputri/img/project/07.png')}}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 graphics ads">
                                <a id="demo09" href="#animatedModal" class="portfolio_item"> <img src="{{asset('fadiyahputri/img/project/08.png')}}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                        </div>
                        <!-- end portfolio_container -->
                    </div>
                    <!-- portfolio -->
                </div>
                <!-- end portfolio div -->
            </div>
            <!-- end main container -->
        </div>
    </div>
    <!-- ./projects -->

    <!-- AS A STUDENT   -->
    <div class="section" id="student">
        <div class="container">
            <div class="col-md-12">
                <h4>04</h4>
                <h1 class="size-50">Skills</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-12">
            <div class="skills">
                                <div class="skill-name">
                                    <p>HTML</p><p>82%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" id="bar1" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="background-color: #425BB5; width: 82%;"></div>
                                </div>
                                <div class="skill-name">
                                    <p>CSS</p><p>71%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" id="bar2" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="background-color: #425BB5; width: 71%;"></div>
                                </div>
                                <div class="skill-name">
                                    <p>PHP</p><p>26%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" id="bar3" role="progressbar" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100" style="background-color: #425BB5; width: 26%;"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Javascript</p><p>23%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" id="bar4" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="background-color: #425BB5; width: 23%;"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Figma</p><p>89%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" id="bar5" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="background-color: #425BB5; width: 89%;"></div>
                                </div>
                            </div>
            </div>
        </div>
    </div>
    <!-- ./experience -->
    
    <!-- contact -->
    <div class="section" id="contact">
        <div class="container">
            <div class="col-md-12">
                <h4>05</h4>
                <h1 class="size-50">Contact  Me</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-4" data-aos="fade-up">

                <h3>Phone Number</h3>
                <p>+62 857-8179-6139</p>
                <h3> Mobile Number</h3>
                <p>+62 788-4616-404</p>
                <h3>Email</h3>
                <p>fadiyah089putri@gmail.com</p>

                <h3>Social Network</h3>

                <ul class="social">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <div class="h-50"></div>
            </div>
            <div class="col-md-8" data-aos="fade-up">
                <form class="contact-bg" id="contact-form" name="contact" method="post" novalidate="novalidate">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" />
                    <input type="email" name="email" class="form-control" placeholder="Your E-mail" />
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number" />
                    <textarea name="message" class="form-control" placeholder="Your Message" style="height:120px"></textarea>
                    <button id="submit" type="submit" name="submit" class="btn btn-glance">Send</button>
                    <div id="success">
                        <p class="green textcenter"> Your message was sent successfully! I will be in touch as soon as I can. </p>
                    </div>
                    <div id="error">
                        <p> Something went wrong, try refreshing and submitting the form again. </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./contact -->

     <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>free-css</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

    <!-- DEMO01 -->
    <!-- <div id="animatedModal" class="popup-modal">
        <div id="btn-close-modal" class="close-animatedModal close-popup-modal"> <i class="ion-close-round"></i> </div>
        <div class="clearfix"></div>
        <div class="modal-content">
            <div class="container">
                <div class="portfolio-padding">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Geschäfts Eines<br /> Web-Studios</h2>
                        <div class="h-50"></div>
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value. Quickly promote premium strategic theme areas vis-a-vis.</p>
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value.</p>
                        <br />
                        <br /> <img src="{{asset('fadiyahputri/img/portfolio/02.jpg')}}" alt="" class="img-responsive" />
                        <br />
                        <br />
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value. Quickly promote premium strategic theme areas vis-a-vis.</p>
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value.</p>
                        <br />
                        <br /> </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- jQuery -->
    <script src="{{asset('fadiyahputri/js/jquery.js')}}"></script>
    <!--  plugins  -->
    <script src="{{asset('fadiyahputri/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('fadiyahputri/js/plugins.js')}}"></script>
    <script src="{{asset('fadiyahputri/js/aos.js')}}"></script>
    <script src="{{asset('fadiyahputri/js/jquery.form.js')}}"></script>
    <script src="{{asset('fadiyahputri/js/jquery.validate.min.js')}}"></script>

    <!--  main script  -->
    <script src="{{asset('fadiyahputri/js/custom.js')}}"></script>
</body>

</html>