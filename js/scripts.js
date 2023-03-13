jQuery(document).ready(function ($) {
    $('.hamburger').click(function () {
        $(this).toggleClass('open');
        $('.main-menu').toggleClass('show');
    });
});


/* Testimonial Slider */

const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slider-slides li");
const slideCount = slides.length;
let activeSlide = 0;

// Functions
const initMoveSlide = (next = true, index = null) => {
    slides[activeSlide].classList.remove("active");
    bullets[activeSlide].classList.remove("active");

    if (index !== null) activeSlide = index;
    else if (next && activeSlide === slideCount - 1) activeSlide = 0;
    else if (!next && activeSlide === 0) activeSlide = slideCount - 1;
    else activeSlide = next ? activeSlide + 1 : activeSlide - 1;
};
const moveSlide = () => {
    slides[activeSlide].classList.add("active");
    bullets[activeSlide].classList.add("active");
};
const createBullet = (index) => {
    const li = document.createElement("li");
    const button = document.createElement("button");

    button.addEventListener("click", () => {
        initMoveSlide(false, index);
    });

    li.appendChild(button);

    return li;
};

// Event listener transition end slides
slides.forEach((slide) => slide.addEventListener("transitionend", moveSlide));

// Event listener buttons
document.querySelectorAll(".slider-control").forEach((button) =>
    button.addEventListener("click", () => {
        if (button.classList.contains("slider-prev")) initMoveSlide(false);
        else initMoveSlide();
    })
);

// Bullet list init
const bullets = [];
const bulletList = document.createElement("ul");
bulletList.classList.add("slider-bullets");
for (let i = 1; i <= slideCount; i++) {
    const bullet = createBullet(i - 1);
    bulletList.appendChild(bullet);
    bullets.push(bullet);
}
slider.appendChild(bulletList);

// First to be active
slides[0].classList.add("active");
bullets[0].classList.add("active");
console.log(bullets[0]);
