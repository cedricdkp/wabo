window.addEventListener("scroll", function() {
    const navbar = document.getElementById("navbar");
    const navLinks = document.getElementById("nav-list");
    if (window.scrollY > 50) {
        navbar.classList.add("bg-white", "shadow-lg", "py-3");
        navbar.classList.remove("py-4");
        navLinks.querySelectorAll('a').forEach(link => {
            link.classList.add("text-black");
            link.classList.remove("text-white");
        });
    } else {
        navbar.classList.remove("bg-white", "shadow-lg", "py-3");
        navbar.classList.add("py-4");
        navLinks.querySelectorAll('a').forEach(link => {
            link.classList.remove("text-black");
            link.classList.add("text-white");
        });
    }
});

const menuToggle = document.getElementById("menu-toggle");
const mobileMenu = document.getElementById("mobile-menu");
menuToggle.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
    const isExpanded = !mobileMenu.classList.contains("hidden");
    menuToggle.setAttribute("aria-expanded", isExpanded);
    menuToggle.querySelector("i").classList.toggle("fa-bars");
    menuToggle.querySelector("i").classList.toggle("fa-times");
});

function toggleDescription(id) {
    const desc = document.getElementById(id);
    const button = desc.previousElementSibling;
    const isHidden = desc.classList.contains("hidden");
    desc.classList.toggle("hidden");
    button.setAttribute("aria-expanded", isHidden);
}

function filterDestinations(category) {
    const destinations = document.querySelectorAll('.destination');
    destinations.forEach(dest => {
        if (category === '' || dest.dataset.category === category) {
            dest.style.display = 'block';
        } else {
            dest.style.display = 'none';
        }
    });
}