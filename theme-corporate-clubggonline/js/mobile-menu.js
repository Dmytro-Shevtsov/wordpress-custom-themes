document.addEventListener("DOMContentLoaded", function () {
    const headerWr = document.querySelector(".header-wr");
    const menuBtn = document.querySelector(".m-munu-btn");
    const body = document.body;

    if (headerWr && menuBtn) {
        menuBtn.addEventListener("click", function () {
            headerWr.classList.toggle("header-wr-visible");
            menuBtn.classList.toggle("header-wr-clos");
            body.classList.toggle("no-scroll"); // Добавляем или убираем запрет прокрутки
        });
    }
	
	
});
