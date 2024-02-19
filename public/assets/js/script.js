console.log("linked");
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".slider .slide");
    let currentIndex = 0;

    function showSlide(index) {
        slides[currentIndex].classList.remove("active");
        slides[index].classList.add("active");
        currentIndex = index;
    }

    function nextSlide() {
        const nextIndex = (currentIndex + 1) % slides.length;
        showSlide(nextIndex);
    }

    // Show the first slide
    showSlide(0);

    // Change slide every 5 seconds
    setInterval(nextSlide, 5000);
});

const menuItems = document.querySelector(".menu-items");
const hamburgerMenuBtn = document.querySelector(".hamburger-menu-btn");

hamburgerMenuBtn.addEventListener("click", function () {
    menuItems.classList.toggle("active");
    hamburgerMenuBtn.classList.toggle("open");
});
