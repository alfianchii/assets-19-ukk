const navbar = document.body.querySelector("#navbar");
const navbarMenu = document.body.querySelector("#navbar-menu");
const navbarLogoText = document.body.querySelector("#navbar-logo-text");

const scroll = () =>
    navbarChangeBehaviour(window.scrollY, navbar, navbarMenu, navbarLogoText);

const navbarChangeOnDown = (nav, menu, logoText) => {
    nav.classList.add("backdrop-blur-lg");
    nav.classList.replace("bg-transparent", "bg-dodger-blue/70");
    menu.classList.replace("text-battleship-grey", "text-white");
    logoText.classList.replace("text-black", "text-white");
};

const navbarChangeOnUp = (nav, menu, logoText) => {
    nav.classList.remove("backdrop-blur-lg");
    nav.classList.replace("bg-dodger-blue/70", "bg-transparent");
    menu.classList.replace("text-white", "text-battleship-grey");
    logoText.classList.replace("text-white", "text-black");
};

const navbarChangeBehaviour = (calc, nav, navMenu, navLogoText) => {
    if (calc > 100) navbarChangeOnDown(nav, navMenu, navLogoText);
    else navbarChangeOnUp(nav, navMenu, nav, navLogoText);
};

scroll();
window.onscroll = () => scroll();
