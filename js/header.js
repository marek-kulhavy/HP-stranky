const menuIcon = document.querySelector(".menu-icon");
const navigation = document.querySelector("nav");
const hamburgerIcon = document.querySelector(".fa-solid");

// Funkce pro aktualizaci navigace podle šířky okna
function updateNavigation() {
    if (window.innerWidth > 1024) {
        // Pro desktop - zobrazení navigace a skrytí ikony
        navigation.style.display = "block";
        hamburgerIcon.classList.remove("fa-xmark");
        hamburgerIcon.classList.add("fa-bars");
    } else {
        // Pro mobil - skrytí navigace
        if (!hamburgerIcon.classList.contains("fa-xmark")) {
            navigation.style.display = "none";
        }
    }
}

// Otevření/zavření menu
menuIcon.addEventListener("click", () => {
    if (hamburgerIcon.classList.contains("fa-bars")) {
        hamburgerIcon.classList.replace("fa-bars", "fa-xmark");
        navigation.style.display = "block";
    } else {
        hamburgerIcon.classList.replace("fa-xmark", "fa-bars");
        navigation.style.display = "none";
    }
});

// Sledování změny velikosti okna
window.addEventListener("resize", updateNavigation);

updateNavigation();