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

var swiper = new Swiper('.swiper-container2', {
    slidesPerView: 1,
    spaceBetween: 10,
    // init: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    speed: 900,
    loop: true,
    autoplay: {
        delay: 1500,

        disableOnInteraction: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        992: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        1600: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
    }
});


var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 5,
    speed: 900,
    freeMode: false,
    loopedSlides: 1, //looped slides should be the same

});
var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    slidesPerView: 1,
    freeMode: false,
    speed: 900,
    loopedSlides: 1, //looped slides should be the same
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    thumbs: {
        swiper: galleryThumbs,
    },
});


function toggleCart() {
    document.querySelector('.sidecart').classList.toggle('open-cart');
}

toggleCart();

