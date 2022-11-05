<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Tirek</title>

    <!-- link Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Quicksand -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@600&family=Poppins:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <!-- tailwind config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue-dark': '#406B9E',
                        'blue': '#349DFD',
                        'tet': '#001458',
                        'unselect': '#BAC5E7',
                        'stroke': '#81B7E9',
                        'h1': '#1A91FF',

                    },
                    boxShadow: {
                        nav: '2px 2px 50px 1px rgba(179, 185, 191, 0.1);',
                        bxsd: '5px 5px 10px rgba(0, 0, 0, 0.1);',
                        side: ' 0px 5px 10px rgba(0, 0, 0, 0.05);',
                    }
                },
            }
        }
    </script>
    <style>
          
          *{
            user-select: none;
        }
        @font-face {
         font-family: "Japan";
         src: url('tirekk/font/HIROMISAKE.ttf');
         }
         @keyframes tirek {
            0% {
                margin-left: -75%;
            }

            100% {
                margin-right: 0;
            }
        }
        .tirek{
            animation-name: tirek;
            animation-duration: 2s;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class=" flex py-2 pt-3 bg-gray-300">
        <ul class= "flex text-sm items-center justify-between w-[23%]   text-blue-dark font-semibold mx-auto">
            <li><a class=' hover:border-b-4 hover:border-white ' style="transition: 1s;" href="#home">Home</a></li>
            <li><a class=' hover:border-b-4 hover:border-white ' style="transition: 1s;" href="#about">About</a></li>
            <li><a class=' hover:border-b-4 hover:border-white ' style="transition: 1s;" href="#project">Project</a></li>
            <li><a class=' hover:border-b-4 hover:border-white ' style="transition: 1s;" href="#contact">Contact</a></li>
        </ul>
        
    </nav>
    <!-- hero image -->
    <div class="w-full h-96 bg-gray-300 ">
        <div class=" text-center pt-24 tirek">
            <hr class="w-1/3 h-1 bg-blue-dark">
            <hr class="w-1/3 h-1 float-right bg-blue-dark">
            <label class="text-blue-dark font-['Poppins'] font-normal -tracking-tighter text-base text-center pb-1 -mr-80 ">Welcome To</label>
            <h1 class="text-blue-dark font-['Montserrat']  -tracking-tighter text-2xl ">
                <img src="tirekk/img/STARBY.png" alt="" class="  h-10 mb-1 mt-1 items-center mx-auto">
            </h1>         
            <label for="" class="text-gray-700 font-['Montserrat']   text-base text-center ml-32"> Portfolio</label>
            <hr class="w-1/3 h-1 bg-blue-dark">
            <hr class="w-1/3 h-1 float-right bg-blue-dark">
            

            <div class="mt-36 flex">
                <ul class="flex items-center text-center justify-between w-[16%] font-semibold text-gray-700 text-xs mx-auto">
                    <li><a class="hover:text-white" href="https://www.instagram.com/strbyyy">Instagram</a></li>
                    <li><a class="hover:text-white" href="https://github.com/tirbyss">Github</a></li>
                    <li><a class="hover:text-white" href="#">Youtube</a></li>
                </ul>
            </div>
        </div>
    </div>

        <!-- About Me -->
        <main id="about" class="h-96 mt-12 border-b-2 w-11/12 mx-auto">
            <h1 class="font-semibold font-['Quicksand'] text-center mt-2 text-blue-dark text-2xl ">About Me</h1>
            <hr class="opacity-80 w-3/4 mx-auto">
            <div name="kiri" class="w-full mt-6 ">
                <div class="font-['Montserrat'] ml-[8%]">
                    <p class="text-xs text-center w-11/12" style="line-height: 1.5;">
                        Halo! , nama saya adalah <span class="text-blue-dark" style="letter-spacing: 1px;">Fathir Akmal Burhanudin.</span>Hal yang menarik minat dalam Desain adalah luasnya dan indahnya Visual dari desain yang ada. Dalam dunia desain khususnya Web Design banyak hal yang sangat menarik dan meningkatkan kreativitas. Bukan hanya Web Design tapi juga berfokus pada pengembangan perangkat lunak berbasis web. Cukup banyak bahasa yang sudah dipelajari mulai dari beberapa bahasa pemrograman sampai <strong class="text-blue-dark" style="letter-spacing: 1px;">framework.</strong>
                    </p>
                </div>
                <hr class="w-3/12 mx-auto border-blue-dark mt-6">
                <div class="flex flex-col text-center justify-evenly ">
                    <h2 class="text-center font-semibold text-xl text-blue-dark mt-4">Skills</h2>
                    <ul class="flex justify-between w-[50%] mx-auto mt-4 px-8 py-1">
                        <li class="bg-blue px-1 rounded-xl text-white text-">CSS 3</li>
                        <li class="bg-red-600 px-2 rounded-xl text-white">HTML 5</li>
                        <li class="bg-yellow-400 px-2 rounded-xl text-white">Javascript</li>
                        <li class="bg-blue-dark px-2 rounded-xl text-white">PHP</li>
                    </ul>
                    
                    <ul class="flex justify-between w-[25%] mt-4 mx-auto  px-4 py-1">
                        <li class="bg-blue px-2 rounded-xl text-white">Tailwind CSS</li>
                        <li class="bg-blue-dark px-2 rounded-xl text-white">Bootstrap</li>
                    </ul>
                    <ul class="mx-auto mt-4 ">
                        <li class="bg-green-600 px-2 rounded-xl text-white">Figma</li>
                    </ul>
                </div>
            </div>
            
        </main>

        <!-- My Project -->
        <main id="project" class="h-80">        
        <div name="konten-work" class=" mx-auto w-11/12  mt-12" >
            <h1 class=" font-semibold font-['Quicksand'] text-center mt-6 text-blue-dark text-2xl ">My Project</h1>

            <div name="wrapper" class="w-11/12 text-center mx-auto" >
                <div name="pict-1" class=" h-fit mt-6">
                    <h2 class=" mt-6 text-2xl font-['Japan'] font-bold text-orange-400" style="letter-spacing: 3px;">Travel</h2>
                    <p class="w-[80%] mx-auto mt-2 text-xs font-['Montserrat'] mb-2">Author : Team</p>
                    <p class="w-[80%] mx-auto mt-2 text-xs font-['Montserrat'] mb-2" >
                        This is my first website design. People don't know the whole part yet
                        On this earth, there are still many beautiful and interesting places, In <strong class="text-blue-dark ">StarbyTour</strong> you can explore this beautiful earth. 
                    </p>
                    
                </div>
                <div class="mt-8">
                    <img src="tirekk/img/travel.jpg" alt="" class="w-[55%] mx-auto">
                    <img src="tirekk/img/2trav.jpg" alt="" class="w-[55%] mx-auto">
                    <a href="https://www.figma.com/file/5Ms7pxlnp5d5b3rd5FEToZ/absensi?node-id=43%3A634" class="text-orange-500">See More</a>
                </div>
            </div>    
            
        </div>
        <div name="konten-work" class=" mx-auto w-11/12  mt-12" >
            
            <div name="wrapper" class="w-11/12 text-center mx-auto" >
                <div name="pict-1" class=" h-fit mt-12">
                    <h2 class="mt-6 text-2xl font-['Quicksand'] font-bold text-gray-700">Dashboard</h2>
                    <p class="w-[80%] mx-auto mt-2 text-xs font-['Montserrat']" >
                        In Indonesia, there are various Modern-themed designs and one of them is below. The theme of this one design is <strong class="text-blue-dark">Neumorphism. </strong>   
                    </p>
                </div>
                <div class="mt-10">
                    <img src="tirekk/img/dsh.jpg" alt="" class="w-[55%] mx-auto">
                    <a href="https://www.figma.com/file/5Ms7pxlnp5d5b3rd5FEToZ/absensi?node-id=43%3A634" class="text-orange-500">See More</a>
                </div>
            </div>    
            
        </div>
        <div name="konten-work" class=" mx-auto w-11/12  mt-12" >
            
            <div name="wrapper" class="w-11/12 text-center mx-auto" >
                <div name="pict-1" class=" h-fit mt-12">
                    <h2 class="mt-6 text-2xl font-['Japan'] font-bold text-red-700">Dashboard</h2>
                    <p class="w-[80%] mx-auto mt-2 text-xs font-['Montserrat']" >
                        There are already many designs in Indonesia that have a monochrome theme or use the western region theme. Below is my first attempt to create a <strong class="text-blue-dark">Japanese Theme. </strong>
                    </p>
                </div>
                <div class="mt-10">
                    <img src="tirekk/img/jpn.png" alt="" class="w-[55%] mx-auto">
                    <a href="https://www.figma.com/file/TwlshabmyvhNjAflAsucte/Untitled?node-id=0%3A1" class="text-orange-500 hover:">See More</a>
                </div>
            </div>    
            
        </div>
        <footer id="contact" class="w-full h-80 mt-16 bg-[#221C20]">
            <!-- <img src="asset/STARBY.png" alt="" class="  h-10 pt-5 mx-auto"> -->
            <h1 class="text-2xl text-center items-center mx-auto pt-4 text-white font-['Quicksand'] ">Contact me</h1>
            <div class="w-full   h-40 flex items-center justify-center ">
                <input type="text" placeholder="Full Name" class="w-60 bg-transparent text-blue  border-blue-dark h-8 text-center">
                <textarea name="" id="" cols="30" rows="10" placeholder="Subject" class=" text-center bg-transparent text-blue h-8"></textarea>
                <input type="email" placeholder="example@gmail.com" class="w-60 bg-transparent text-blue  border-blue-dark h-8 text-center ">
            </div>
            <button class="mx-auto flex text-white border-2 px-2 py-1 rounded mb-8 hover:bg-blue-dark">Send Message</button>
            <h4 class="text-white font-normal text-xs mx-auto text-center items-center ">Copyright 2022</h4>
        </footer>
    </body>
</html>