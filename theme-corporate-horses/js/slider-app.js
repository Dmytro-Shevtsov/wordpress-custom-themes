document.addEventListener("DOMContentLoaded", function () {
    let swiper1 = null;

    function initSwiper1() {
        let screenWidth = window.innerWidth;
        if (screenWidth >= 576) {
            if (!swiper1) {
                swiper1 = new Swiper(".swiper-1", {
                    loop: true,
                    pagination: {
                        el: ".swiper-pagination-1",
                        clickable: true,
                    },
                });
            }
        } else {
            if (swiper1) {
                swiper1.destroy(true, true);
                swiper1 = null;
            }
        }
    }

    initSwiper1();
    window.addEventListener("resize", initSwiper1);
});
