import $ from 'jquery';
import Swiper from 'swiper';
import { Autoplay, FreeMode, Navigation, Pagination, Thumbs } from 'swiper/modules';

// loader
$(window).on('load', function() {
    $('.preloader-wrap').fadeOut(500);
});

Swiper.use([Navigation, Pagination, Thumbs, FreeMode, Autoplay]);

let swiper = new Swiper(".mySwiper", {
    loop: true,
    spaceBetween: 4,
    slidesPerView: 4,
    freeMode: true,
    //slideToClickedSlide: true,
    watchSlidesProgress: true,
});

let swiper2 = new Swiper(".mySwiper2", {
    loop: true,
    spaceBetween: 10,
    navigation: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    thumbs: {
        swiper: swiper,
    },
});

let swiper3 = new Swiper(".mySwiper3", {
    slidesPerView: 3.6,
    spaceBetween: 24,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        320: {
            slidesPerView: 1.2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 3.6,
            spaceBetween: 24,
        },
    },
});
