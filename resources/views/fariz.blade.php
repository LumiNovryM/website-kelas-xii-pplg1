<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
</head>
<body>
    <!-- secondary slate-500 -->
    <!-- primary teal-500 -->
    <!-- dark slate-900 -->
    <!-- Header Section -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 pr-10 pl-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-3xl text-teal-500 block py-6 pl-2">Farizra</a>
                </div>
                <div class="flex items-center px-4">    
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="w-[30px] h-[2px] my-2 block bg-slate-900 transition duration-300 ease-in-out"></span>
                        <span class="w-[30px] h-[2px] my-2 block bg-slate-900 transition duration-300 ease-in-out"></span>
                        <span class="w-[30px] h-[2px] my-2 block bg-slate-900 transition duration-300 ease-in-out"></span>
                    </button>
                    <nav id="nav-menu" class="py-5 bg-white max-w-[250px] w-full right-4 top-full lg-block lg:static lg:max-w-full">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-lg text-slate-900 py-2 mx-9 group-hover:text-teal-500">Home</a>
                            </li>
                            <li class="group">
                                <a href="#home" class="text-lg text-slate-900 py-2 mx-9 group-hover:text-teal-500">About Me</a>
                            </li>
                            <li class="group">
                                <a href="#home" class="text-lg text-slate-900 py-2 mx-9 group-hover:text-teal-500">My Skills</a>
                            </li>
                            <li class="group">
                                <a href="#home" class="text-lg text-slate-900 py-2 mx-9 group-hover:text-teal-500">Services</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="pt-36 mb-20 pl-16">
        <div class="container">
            <div class="flex flex-warp">
                <div class="w-full self-center px-4">
                    <h1 class="text-base font-semibold text-teal-500">Halo Semua, <span class="block font-bold text-slate-900 text-4xl mt-1">Saya Fariz Rachman A.</span></h1>
                    <h2 class="font-medium text-slate-500 text-lg mb-5">Web Developer and Website Design</h2>
                    <p class="font-medium text-slate-400 mb-10 leading-relaxed">I'm a high school student, contact me if <br> you want to hire my services</p>
                    
                    <a href="#" class="text-base font-semibold text-white bg-teal-500 py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Contact Me</a>
                </div>
                <div class="w-full self-end px-4">
                    <div class="mt-10">
                        <img src="farizz/bg-abi.png" alt="gambar orang tampan" class="max-w-full mx-auto w-400">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="pd-36 pb-32  pl-16">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-teal-500 text-lg ">About Me</h4>
                    <h2 class="font-bold text-slate-900 text-3xl mb-5 max-w-xl lg:text-4xl">Better Design </h2>
                    <p class="font-medium text-base text-slate-500 max-w-xl lg:text-lg">Better Experience</p>
                                <p class="text-slate-900 text-base">
              
I design and build digital products. I also 1 year experience in various design and programming
            </p>
                </div>
                <div class="w-full px-4 w-1/2">
                    <h3 class="font-semibold text-2xl mb-4 lg:text-3xl lg:pt-8">My Project</h3>
                    <p class="font-medium text-base text-slate-500 mb-2 lg:text-lg">see the various projects I made on my social media</p>
                    <div class="flex items-center">
                        <!-- instagram -->
                       
                        <a href="https://www.instagram.com/evzquarizve/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-400">
                            <svg role="img"  class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>

                        <!-- Discord -->
                        <a href="https://discord.com/channels/@me" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-400">
                            <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Discord</title><path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"/></svg>
                        </a>
                        
                        <!-- Twitter -->
                        <a href="https://twitter.com/abi" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-400">
                            <svg role="img" viewBox="0 0 24 24" class="fill-current" width="20" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>

                        <!-- Youtube -->
                        <a href="https://www.youtube.com/channel/UC0YWpU1MlDl8TmGA1wTCEgQ" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-400">
                            <svg role="img" viewBox="0 0 24 24"  class="fill-current" width="20" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about me skills -->

      <!-- about -->
      <div id="about" class="dark:bg-teal-500 ">
        <div
          class="container mx-auto flex flex-col-reverse lg:flex-row items-center gap-20"
        >
          <!-- left -->
          <div class="relative">
            <img
              class="h-1/4 absolute top-0 left-0 -z-10"
              src="./img/dots.png"
              alt=""
            />
            <div class="h-full rounded-full overflow-hidden">
              <img src="./img/portrait.png" alt="" />
            </div>
          </div>
          <!-- right -->
          <div class="my-auto flex flex-col gap-3">
            <h1 class="font-bold uppercase text-teal-500 text-2xl">My Skills</h1>
            <h1 class="font-bold text-slate-900 text-3xl max-w-xl lg:text-4xl">Programing languages</h1>
            <h1 class="font-medium text-slate-500 text-lg">
                see what I've learned and mastered in 1 year programming languages
            </h1>

            <h2 class="text-teal-500 font-medium">HTML</h2>
            <div class="w-full bg-gray-200 h-1.5 rounded-md">
              <div class="w-full bg-teal-500 h-1.5 rounded-md"></div>
            </div>
            <h2 class="text-teal-500 font-medium">CSS</h2>
            <div class="w-full bg-gray-200 h-1.5 rounded-md">
              <div class="w-5/6 bg-teal-500 h-1.5 rounded-md"></div>
            </div>
            <h2 class="text-teal-500 font-medium">Javascript</h2>
            <div class="w-full bg-gray-200 h-1.5 rounded-md">
              <div class="w-1/2 bg-teal-500 h-1.5 rounded-md"></div>
            </div>
            <h2 class="text-teal-500 font-medium">PHP</h2>
            <div class="w-full bg-gray-200 h-1.5 rounded-md">
              <div class="w-80 bg-teal-500 h-1.5 rounded-md"></div>
            </div>

           
          </div>
        </div>
      </div>

        <!-- services -->
        <div id="services" class="dark:bg-slate-900 mt-40">
            <div class="container mx-auto">
              <!-- top -->
              <div class="flex flex-col gap-3 items-center">
                <h1 class="text-teal-500 font-bold">SERVICES</h1>
                <h1 class="text-3xl dark:text-white">What do I offer?</h1>
                <p class="w-1/2 text-center text-gray-400">
                  My approach to website design is to create a website that
                  strengthens your company’s brand while ensuring ease of use and
                  simplicity for your audience.
                </p>
              </div>
              <!-- bottom -->
              <div class="p-5 sm:p-0 flex flex-wrap justify-between">
                <!-- card -->
                <div
                  class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
                >
                  <img class="w-10" src="./img/icon.png" alt="" />
                  <h1 class="font-medium text-lg dark:text-white">UX / UI Design</h1>
                  <p class="text-gray-400">
                    I specialize in creating interactive websites for individuals and
                    small businesses.
                  </p>
                  <a class="text-teal-500 font-semibold text-sm hover:text-teal-400" href=""
                    >Read More</a
                  >
                </div>
                <!-- card -->
                <div
                  class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
                >
                  <img class="w-10" src="./img/icon.png" alt="" />
                  <h1 class="font-medium text-lg dark:text-white">Web Development</h1>
                  <p class="text-gray-400">
                    Create a dynamic web with an attractive appearance and can be accessed on various devices
                  </p>
                  <a class="text-teal-500 font-semibold text-sm hover:text-teal-400" href=""
                    >Read More</a
                  >
                </div>
                <!-- card -->
                <div
                  class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
                >
                  <img class="w-10" src="./img/icon.png" alt="" />
                  <h1 class="font-medium text-lg dark:text-white">Task Services</h1>
                  <p class="text-gray-400">
                   
I am able to do assignments ranging from elementary school to high school assignments
                  </p>
                  <a class="text-teal-500 font-semibold text-sm hover:text-teal-400 " href=""
                    >Read More</a
                  >
                </div>

              
                </div>
    
                </div>
              </div>
            </div>
          </div>

        <!-- Footer -->
    <footer class="bg-slate-900 mt-10">
        <!-- Flex Container -->
        <div
          class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0"
        >
          <!-- Logo and social links container -->
          <div
            class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start"
          >
            <div class="mx-auto my-6 text-center text-white md:hidden">
              Copyright &copy; 2022, All Rights Reserved
            </div>
            <!-- Logo -->
            <div>
              <img src="img/logo-white.svg" class="h-8" alt="" />
            </div>
            <!-- Social Links Container -->
            <div class="flex justify-center space-x-4">
              <!-- Link 1 -->
              <a href="#">
                <img src="img/icon-facebook.svg" alt="" class="h-8" />
              </a>
              <!-- Link 2 -->
              <a href="#">
                <img src="img/icon-youtube.svg" alt="" class="h-8" />
              </a>
              <!-- Link 3 -->
              <a href="#">
                <img src="img/icon-twitter.svg" alt="" class="h-8" />
              </a>
              <!-- Link 4 -->
              <a href="#">
                <img src="img/icon-pinterest.svg" alt="" class="h-8" />
              </a>
              <!-- Link 5 -->
              <a href="#">
                <img src="img/icon-instagram.svg" alt="" class="h-8" />
              </a>
            </div>
          </div>
          <!-- List Container -->
          <div class="flex justify-around space-x-32">
            <div class="flex flex-col space-y-3 text-white">
              <a href="#" class="hover:text-brightRed">Home</a>
              <a href="#" class="hover:text-brightRed">Pricing</a>
              <a href="#" class="hover:text-brightRed">Products</a>
              <a href="#" class="hover:text-brightRed">About</a>
            </div>
            <div class="flex flex-col space-y-3 text-white">
              <a href="#" class="hover:text-brightRed">Careers</a>
              <a href="#" class="hover:text-brightRed">Community</a>
              <a href="#" class="hover:text-brightRed">Privacy Policy</a>
            </div>
          </div>
  
          <!-- Input Container -->
          <div class="flex flex-col justify-between">
            <form>
              <div class="flex space-x-3">
                <input
                  type="text"
                  class="flex-1 px-4 rounded-full focus:outline-none"
                  placeholder="Updated in your inbox"
                />
                <button
                  class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none"
                >
                  Go
                </button>
              </div>
            </form>
            <div class="hidden text-white md:block">
              Copyright &copy; 2022, All Rights Reserved
            </div>
          </div>
        </div>
      </footer>
</body>
</html>