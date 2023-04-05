jQuery(document).ready(function ($) {
    $('.hamburger').click(function () {
        $(this).toggleClass('open');
        $('.main-menu').toggleClass('show');
    });
});
  

/* ------------- Testimonial Slider ------------- */
const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slider-slides li");
const slideCount = slides.length;
let activeSlide = 0;
let autoSlideInterval;

// Functions
const initMoveSlide = (next = true, index = null) => {
    slides[activeSlide].classList.remove("active");

    if (index !== null) activeSlide = index;
    else if (next && activeSlide === slideCount - 1) activeSlide = 0;
    else if (!next && activeSlide === 0) activeSlide = slideCount - 1;
    else activeSlide = next ? activeSlide + 1 : activeSlide - 1;

    slides[activeSlide].classList.add("active");
    updateSlideNo(activeSlide + 1);
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

const updateSlideNo = (number) => {
    const slideNo = document.querySelector("#slideNo");
    slideNo.innerHTML = `Review ${number} of ${slideCount}`;
};

const startAutoSlide = () => {
    autoSlideInterval = setInterval(() => {
        initMoveSlide();
    }, 3500); // change interval time here (in milliseconds)
};

const stopAutoSlide = () => {
    clearInterval(autoSlideInterval);
};

// Event listener transition end slides
slides.forEach((slide) =>
    slide.addEventListener("transitionend", (event) => {
        if (event.propertyName === "opacity") startAutoSlide();
    })
);

// Event listener buttons
document.querySelectorAll(".slider-control").forEach((button) =>
    button.addEventListener("click", () => {
        if (button.classList.contains("slider-prev")) {
            stopAutoSlide();
            initMoveSlide(false);
        } else {
            stopAutoSlide();
            initMoveSlide();
        }
    })
);

// First to be active
slides[0].classList.add("active");
updateSlideNo(1);

// Start automatic sliding
startAutoSlide();
