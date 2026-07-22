document.addEventListener('DOMContentLoaded', function () {
    const nav = document.querySelector('.header-nav');
    const navOffsetTop = nav.offsetTop; // запоминаем начальное положение блока

    window.addEventListener('scroll', function () {
        if (window.scrollY >= navOffsetTop) {
            nav.classList.add('is-sticky');
        } else {
            nav.classList.remove('is-sticky');
        }
    });
});
