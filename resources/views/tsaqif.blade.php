<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tsaqif Maulana | Personal Portfolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('tsaqif-m') }}/assets/img/clipboard-minus.svg" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('tsaqif-m') }}/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1" style="color:#fff;">Hi and Welcome</h1>
                <h3 class="mb-5" style="color:#fff;"><em>Tsaqif Maulana's personal portfolio website</h3>
                <a class="btn btn-warning btn-xl" href="#aboutatas">About Me</a>
            </div>
        </header>
        <!-- About-->
        <section class="content-section" style="background-color: #313131;" id="aboutatas">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <div style="width: 40%; height: 50vh; margin: -2% 0 3% 30%;">
                            <img src="{{ asset('tsaqif-m') }}//assets/img/man.jpg" alt="" style="width: fit-content; margin: 0; padding: 0;">
                        </div>
                        <h2 style="color: #fff;">My Biodata</h2>
                        <p class="lead mb-5" style="color: #fff;">
                            Born in 2006, I started my programming journey in my high school days, I am very interested and really like the python programming language especially in the field of data science. I also a website developer, I can also develope website using flask and laravel, I love to learn new things so I'm very welcome to start another new project
                        </p>
                        <a class="btn btn-dark btn-xl" id="next" href="#callout">Hire me</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="content-section text-white text-center" id="services" style="background-color: #414141;">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Language Mastering</h3>
                    <h2 class="mb-5">Here are the programming language that I master</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><p>65%</p></span>
                        <h4><strong>Python</strong></h4>
                        <p class="text-faded mb-0">Mastering at data science and website developing with flask</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><p>90%</p></span>
                        <h4><strong>HTML & CSS</strong></h4>
                        <p class="text-faded mb-0">Website developer with vanilla, bootstrap, and tailwind css ability</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><p>85%</p></span>
                        <h4><strong>PHP</strong></h4>
                        <p class="text-faded mb-0">
                            Understanding the basics of PHP, Experienced at Laravel. Code Igniter underway
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <span class="service-icon rounded-circle mx-auto mb-3"><p>55%</p></span>
                        <h4><strong>Javascript</strong></h4>
                        <p class="text-faded mb-0">Quite good at DOM javascript, vue.js soon on the next target</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Callout-->
        <section class="callout" id="callout">
            <div class="container px-4 px-lg-5 text-center" >
                <h4 class="mx-auto" style="color: #fff;">
                    Wanna collab/work with me?
                </h4>
                <h2 class="mx-auto mb-5" style="color: #fff;">
                    Download my CV!
                </h2>
                <a class="btn btn-warning btn-xl" href="{{ asset('tsaqif-m') }}/assets/file/mycv.jpg" download="tsaqif-m-cv.jpg">Download Now!</a>
            </div>
        </section>
        <!-- Portfolio-->
        <section class="content-section" id="portfolio" style="background-color: #313131;">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Portfolio</h3>
                    <h2 class="mb-5" style="color: #ffffff;">Recent Projects</h2>
                </div>
                <div class="row gx-0">
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Attendance Website</div>
                                    <p class="mb-0">Taking attendance using face recognition in laptop webcam. built by opencv, flask, and laravel</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('tsaqif-m') }}/assets/img/face.jpg" alt="..." style="height: fit-content;"/>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Data Merging With Pandas</div>
                                    <p class="mb-0">Merging and draw a graphichs using pandas, numpy, seaborn, etc based on CSV data</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('tsaqif-m') }}/assets/img/stats.jpg" alt="..." style="height: fit-content;"/>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">News Website</div>
                                    <p class="mb-0">Native PHP applied on this project, basic CRUD only project</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('tsaqif-m') }}/assets/img/news.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Robo Consultant</div>
                                    <p class="mb-0">On going project, you can tell your life problem to the robot, He listen more better than human</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('tsaqif-m') }}/assets/img/py.jpg" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Footer-->
        <footer class="footer text-center" style="background-color: #414141;">
            <div class="container px-4 px-lg-5">
                <p class="mb-3" style="color: #ffffff;">Social Media</p>
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/alifareed.prj/" target="_blank"><i class="icon-social-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="https://www.linkedin.com/in/tsaqif-maulana-498a3124a/" target="_blank"><i class="icon-social-linkedin"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="https://github.com/tsaqifmaulana444" target="_blank"><i class="icon-social-github"></i></a>
                    </li>
                  
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; Tsaqif Maulana 2022</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('tsaqif-m') }}/js/scripts.js"></script>
    </body>
</html>
