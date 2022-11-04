// Image Gallery Script
const container = document.querySelector('.pro-container');
const jumbo = document.querySelector('.jumbo');
const thumbs = document.querySelectorAll('.thumb');
container.addEventListener('click', function(e){

    // Cek apakah yang diklik adalah thumb
    if( e.target.className == 'thumb' ) {

        jumbo.src = e.target.src;
        jumbo.classList.add('fade');
        setTimeout(function(){
            jumbo.classList.remove('fade')
        }, 300)

        thumbs.forEach(function(thumb){
            // if(thumb.classList.contains('active')){
            //     thumb.classList.remove('active')
            // }
            thumb.className = 'thumb';
        });

        e.target.classList.add('active');
        
    }

});

// Dark Mode Script
var icon = document.getElementById("icon")

icon.onclick = function () {
    document.body.classList.toggle ("dark-theme")
    if(document.body.classList.contains("dark-theme")){
        icon.src = "luminovrym/Image/moon.png"
    }else{
        icon.src = "luminovrym/Image/sun.png"
    }
}