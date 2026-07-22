document.addEventListener("DOMContentLoaded", function () {
    const whatsappBtn = document.querySelector(".bb-whatsapp");

    if (!whatsappBtn) return; // Проверяем, есть ли кнопка на странице

    // Проверяем, на главной ли мы странице
    if (document.body.classList.contains("home")) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > window.innerHeight) { // Если прокрутили больше 1 экрана
                whatsappBtn.classList.add("visible");
            } else {
                whatsappBtn.classList.remove("visible"); // Если вернулись вверх, убираем класс
            }
        });
    } else {
        // На других страницах кнопка сразу видима
        whatsappBtn.classList.add("visible");
    }
});
