// drop down
function down(){
    let other = document.querySelector("#other");
    let scroll_card2 = document.querySelector(".scroll_card2");

    other.style.display = "none"
    scroll_card2.style.display = "flex";
    scroll_card2.style.margin = "5% auto 2%";

}

// link team
let team1 = document.querySelector(".card1");
let team2 = document.querySelector(".card2");
let team3 = document.querySelector(".card3");
let team4 = document.querySelector(".card4");

team1.addEventListener("click", function(){
    window.open('https://kanny.onesolver.net/', "_blank");
});
team2.addEventListener("click",function(){
    window.open('/tsaqif', "_blank");
});
team3.addEventListener("click",function(){
    window.open('/fathir', "_blank");
});
team4.addEventListener("click",function(){
    window.open('/dhyka', "_blank");
});

// switch 
var toggle = document.querySelector("#toggle");

toggle.addEventListener("change", () => {

    // nav
    var nav = document.querySelector(".nav");
    var list = document.querySelectorAll(".list");
    var label = document.querySelector(".label");
    var circle = document.querySelector(".circle");

    // hero
    var hero = document.querySelector(".hero");
    var text_hero = document.querySelector(".text");
    var btn_cv = document.querySelector(".btn_cv");
    var sosmed = document.querySelector(".social_media");
    var sosmed_icon = document.querySelectorAll('.a');

    // about
    var about = document.querySelector(".about");
    var project = document.querySelector(".project");
    var card_project = document.querySelectorAll(".card");
    var btn_other = document.querySelector(".other");

    // team
    var team = document.querySelector(".team");

    // contact
    var contact = document.querySelector(".contact");
    var card_contact = document.querySelectorAll(".card_contact");
    var title_contact = document.getElementsByTagName("h1")[1];
    var phone = document.querySelector(".phone");
    var email = document.querySelector(".email");
    var location = document.querySelector(".location");

    // change theme body
    document.body.classList.toggle("light");

    // change theme nav bar
    nav.classList.toggle("light");
    
    for(i = 0; i < list.length; i++){
        list[i].classList.toggle("light");
    }

    label.classList.toggle("light");
    circle.classList.toggle("light");

    // change theme hero 
    hero.classList.toggle("light");

    text_hero.classList.toggle("light");

    btn_cv.classList.toggle("light");

    sosmed.classList.toggle("light");

    for(a = 0; a < sosmed_icon.length; a++){
        sosmed_icon[a].classList.toggle("light");
    }

    // change theme about
    about.classList.toggle("light");

    // change theme project
    project.classList.toggle("light");

    for(b = 0; b < card_project.length; b++){
        card_project[b].classList.toggle("light");
    }

    btn_other.classList.toggle("light");

    team.classList.toggle("light");

    // change theme contact
    contact.classList.toggle("light");

    for(c = 0; c < card_contact.length; c++ ){
        card_contact[c].classList.toggle("light");
    }

    title_contact.classList.toggle("light")

    phone.classList.toggle("light");

    email.classList.toggle("light");

    location.classList.toggle("light");

});