document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
        const question = item.querySelector(".faq-question");
        const answer = item.querySelector(".faq-answer");
        const icon = item.querySelector(".faq-icon");

        question.addEventListener("click", function () {
            const isActive = item.classList.contains("active");

            // Закрываем все открытые элементы
            faqItems.forEach((el) => {
                el.classList.remove("active");
                el.querySelector(".faq-answer").style.maxHeight = null;
                el.querySelector(".faq-answer").style.padding = "0 10px";
            });

            // Если не был активен, открываем
            if (!isActive) {
                item.classList.add("active");
                answer.style.maxHeight = answer.scrollHeight + "px";
                answer.style.padding = "10px";
            }
        });
    });
});
