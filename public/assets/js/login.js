var btns = document.querySelectorAll(".btn-login");
var form = document.querySelector(".form");
var contentText = document.querySelector(".text");
var header = document.querySelector("#header");
var footer = document.querySelector("#footer");
var intro_login = document.querySelector(".introduce-login")
function showForm() {
    btns.forEach(btn => {
        btn.addEventListener('click', function () {
            form.classList.remove('tranX-300');
            contentText.style.transform = "translateY(-300%)";
            header.style.transform = "translateY(-100%)"
            footer.style.transform = "translateY(100px)"
            intro_login.classList.remove('tranX300');
        })
    })

}
function handleForm() {
    if (form.classList.value.includes("tranX-300")) {
        showForm();
    }
}
handleForm();

let slideIndex = 1;
let slides = document.querySelectorAll(".slide");
console.log(slides);
showSlides();

function showSlides() {
    removeActive();
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].classList.add('active')
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
function removeActive() {
    slides.forEach(function (slide) {
        slide.classList.remove("active");
    }
    )
}



