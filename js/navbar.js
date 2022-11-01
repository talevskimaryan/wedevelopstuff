//Mobile menu function
const menuBtn = document.querySelector(".burger-menu");
const navBar = document.querySelector(".navbar");
const bodyObject = document.body;
const mobileLogo = document.getElementById("logo-image-mobile");
const spanSection = document.getElementById("span-section");
var burgerMenuLines = document.getElementsByClassName("burger-menu-line");

menuOpen = 0;

function burgerMenu() {
    if (menuOpen == 0) {
        menuBtn.classList.add("menu-open");
        menuBtn.classList.add("change-color");
        navBar.classList.add("shown");
        bodyObject.classList.add("hidden-scroll");
        mobileLogo.classList.add("menu-opened");
        spanSection.classList.add("menu-opened");
        for(let i=0; i<=2; i++) { 
            burgerMenuLines[i].style.backgroundColor = "#FFFFFF";
        }
        menuOpen = 1;
        document.body.style.overflow = "hidden";
    } else {
        menuBtn.classList.remove("menu-open");
        menuBtn.classList.remove("change-color");
        navBar.classList.remove("shown");
        bodyObject.classList.remove("hidden-scroll");
        mobileLogo.classList.remove("menu-opened");
        spanSection.classList.remove("menu-opened");
        for(let i=0; i<=2; i++) { 
            burgerMenuLines[i].style.backgroundColor = "#BABABAFF";
        }
        menuOpen = 0;
        document.body.style.overflow = "visible";
    }
}
