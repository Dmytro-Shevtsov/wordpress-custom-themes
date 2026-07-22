document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".slider-poker-container", {
        loop: true,
        spaceBetween: 20,
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
