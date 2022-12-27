const buttons = document.querySelectorAll(".menu_button");
buttons.forEach(function (button, index) {
    button.addEventListener("click", function (e) {
        e.preventDefault();
        this.parentNode.classList.toggle("active");
        this.childNodes[1].classList.toggle("fa-angle-right");
        this.childNodes[1].classList.toggle("fa-angle-down");
        buttons.forEach(function (button2, index2) {
            if (index !== index2) {
                button2.parentNode.classList.remove("active");
                button2.childNodes[1].classList.remove("fa-angle-down");
                button2.childNodes[1].classList.add("fa-angle-right");
            }
        });
    });
});
