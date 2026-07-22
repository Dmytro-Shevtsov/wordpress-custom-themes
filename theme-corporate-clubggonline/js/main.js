document.addEventListener("DOMContentLoaded", function () {
    // Уже существующий код
    document.querySelectorAll(".guide-content-img").forEach(guide => {
        let imagesCount = guide.querySelectorAll("img").length;
        guide.classList.add(`guide-${imagesCount}img`);
    });

    // Код для кнопки "вверх"
    const buttonUp = document.querySelector(".button-up");
    if (buttonUp) {
        window.addEventListener("scroll", function () {
            // Если прокрутили больше чем высота экрана + 200px, показываем кнопку
            if (window.scrollY > window.innerHeight + 200) {
                buttonUp.classList.add("visible");
            } else {
                buttonUp.classList.remove("visible");
            }
        });
    }
});

