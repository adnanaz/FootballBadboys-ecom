let prevScrollpos = window.pageYOffset;
const menuBtn = document.querySelector('.menu-btn');
const hamburger = document.querySelector('.menu-btn__burger');
const nav = document.querySelector('.nav');
const menuNav = document.querySelector('.nav__menu');
const navItems = document.querySelectorAll('.nav__menu--item');

window.onscroll = () => {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
        document.getElementById("header-wrap").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-9%";
        document.getElementById("header-wrap").style.top = "-9%";

    }
    prevScrollpos = currentScrollPos;
}


let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu() {
    if (!showMenu) {
        hamburger.classList.add('open');
        nav.classList.add('open');
        menuNav.classList.add('open');
        navItems.forEach(item => item.classList.add('open'));

        showMenu = true;
    } else {
        hamburger.classList.remove('open');
        nav.classList.remove('open');
        menuNav.classList.remove('open');
        navItems.forEach(item => item.classList.remove('open'));

        showMenu = false;
    }
}






function toggleCart() {
    document.querySelector('.sidecart').classList.toggle('open-cart');
}

toggleCart();

