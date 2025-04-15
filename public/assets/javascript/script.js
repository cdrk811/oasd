var navLinks = document.getElementById('navLinks');

function openMenu() {
    navLinks.style.display = "block";
    void navLinks.offsetWidth;
    navLinks.style.right = "0";
}

function hideMenu() {
    navLinks.style.right = "-400px";
    setTimeout(() => {
        navLinks.style.display = "none";
    }, 1000);
}

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        const header = document.querySelector("nav");
        if (window.scrollY > 10) {
            header.classList.add("scrolled");
            header.classList.remove("transparent");
        } else {
            header.classList.add("transparent");
            header.classList.remove("scrolled");
        }
    });
});