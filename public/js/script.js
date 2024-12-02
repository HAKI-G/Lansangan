function toggleDropdown() {
    var dropdown = document.getElementById("dropdown-menu");
    dropdown.classList.toggle("hidden");
}

const imgSlider = document.querySelector(".img-slider");
const imgputahi = document.querySelectorAll(".img-item.putahi");
const infoSlider = document.querySelector(".info-slider");
const infobox = document.querySelector(".info-box");

const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");

let indexSlider = 0;
let index = 0;
let direction;

nextBtn.addEventListener("click", () => {
    indexSlider++;
    imgSlider.style.transform = `rotate(${indexSlider * -90}deg)`;

    index++;
    if (index > imgputahi.length - 1) {
        index = 0;
    }

    document.querySelector(".putahi.active").classList.remove("active");
    imgputahi[index].classList.add("active");

    if (direction === 1) {
        infoSlider.prepend(infoSlider.lastElementChild);
    }

    direction = -1;
    console.log(direction);

    infobox.style.justifyContent = "flex-start";
    infoSlider.style.transform = "translateY(-25%)";
});

prevBtn.addEventListener("click", () => {
    indexSlider--;
    imgSlider.style.transform = `rotate(${indexSlider * -90}deg)`;

    index--;
    if (index < 0) {
        index = imgputahi.length - 1;
    }

    document.querySelector(".putahi.active").classList.remove("active");
    imgputahi[index].classList.add("active");

    if (direction === -1) {
        infoSlider.appendChild(infoSlider.firstElementChild);
    }

    direction = 1;
    console.log(direction);

    infobox.style.justifyContent = "flex-end";
    infoSlider.style.transform = "translateY(25%)";
});

infoSlider.addEventListener("transitionend", () => {
    if (direction === -1) {
        infoSlider.appendChild(infoSlider.firstElementChild);
    } else if (direction === 1) {
        infoSlider.prepend(infoSlider.lastElementChild);
    }

    infoSlider.style.transition = "none";
    infoSlider.style.transform = "translateY(0)";

    setTimeout(() => {
        infoSlider.style.transition =
            ".5s cubic-bezier(0.645, 0.045, 0.355, 1)";
    });
});

const slides = document.querySelectorAll(".carousel-item");
let currentSlide = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.opacity = i === index ? "1" : "0";
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}

// Initialize carousel
showSlide(currentSlide);

// burger popup
function openPopup() {
    const popup = document.getElementById("popupOverlay");
    popup.classList.remove("opacity-0", "pointer-events-none");
}

function closePopup() {
    const popup = document.getElementById("popupOverlay");
    popup.classList.add("opacity-0", "pointer-events-none");
}
// tomato pop up
function openTomatoPopup() {
    const popup = document.getElementById("tomatoPopupOverlay");
    popup.classList.remove("opacity-0", "pointer-events-none");
}

function closeTomatoPopup() {
    const popup = document.getElementById("tomatoPopupOverlay");
    popup.classList.add("opacity-0", "pointer-events-none");
}
// chicken pop up
function openFriedChickenPopup() {
    const popup = document.getElementById("friedChickenPopupOverlay");
    popup.classList.remove("opacity-0", "pointer-events-none");
}

function closeFriedChickenPopup() {
    const popup = document.getElementById("friedChickenPopupOverlay");
    popup.classList.add("opacity-0", "pointer-events-none");
}
// lasagna popup
function openLasagnaPopup() {
    const popup = document.getElementById("lasagnaPopupOverlay");
    popup.classList.remove("opacity-0", "pointer-events-none");
}

function closeLasagnaPopup() {
    const popup = document.getElementById("lasagnaPopupOverlay");
    popup.classList.add("opacity-0", "pointer-events-none");
}

// chicken wings pop up

function openChickenWingsPopup() {
    const popup = document.getElementById("chickenWingsPopupOverlay");
    popup.classList.remove("opacity-0", "pointer-events-none");
}

function closeChickenWingsPopup() {
    const popup = document.getElementById("chickenWingsPopupOverlay");
    popup.classList.add("opacity-0", "pointer-events-none");
}

// spag pop up
function openSpagPopup() {
    const popup = document.getElementById("spagPopupOverlay");
    popup.classList.remove("opacity-0", "pointer-events-none");
}

function closeSpagPopup() {
    const popup = document.getElementById("spagPopupOverlay");
    popup.classList.add("opacity-0", "pointer-events-none");
}

// halohalo
function openHaloHaloPopup() {
    const popup = document.getElementById("haloHaloPopupOverlay");
    popup.classList.remove("opacity-0", "pointer-events-none");
}

function closeHaloHaloPopup() {
    const popup = document.getElementById("haloHaloPopupOverlay");
    popup.classList.add("opacity-0", "pointer-events-none");
}
// pizza pop up

function openPizzaPopup() {
    const popup = document.getElementById("pizzaPopupOverlay");
    popup.classList.remove("opacity-0", "pointer-events-none");
}

function closePizzaPopup() {
    const popup = document.getElementById("pizzaPopupOverlay");
    popup.classList.add("opacity-0", "pointer-events-none");
}