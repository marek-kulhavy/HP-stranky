// Získání referencí na DOM elementy pomocí selektorů
const password1 = document.querySelector(".password-first")
const password2 = document.querySelector(".password-second") 
const paragraphText = document.querySelector(".result-text") 

// Přidání posluchače události 'input' na první pole pro heslo
password1.addEventListener("input", () => {
    // Získání aktuálních hodnot z obou polí
    const password1Value = password1.value
    const password2Value = password2.value
    
    // Porovnání hesel
    if (password1Value === password2Value) {
        // Hesla souhlasí - zobrazení pozitivní zprávy
        paragraphText.textContent = "Hesla jsou shodná"
        paragraphText.classList.add("valid") 
        paragraphText.classList.remove("invalid") 
    } else {
        // Hesla nesouhlasí - zobrazení negativní zprávy
        paragraphText.textContent = "Hesla nejsou shodná"
        paragraphText.classList.add("invalid") 
        paragraphText.classList.remove("valid") 
    }

    // Pokud jsou obě pole prázdná, zpráva se smaže
    if (password1Value === "" && password2Value === "") {
        paragraphText.textContent = ""
    }
})

// Přidání posluchače události 'input' na druhé pole pro heslo
password2.addEventListener("input", () => {
    const password1Value = password1.value
    const password2Value = password2.value

    if (password1Value === password2Value) {
        paragraphText.textContent = "Hesla jsou shodná"
        paragraphText.classList.add("valid")
        paragraphText.classList.remove("invalid")
    } else {
        paragraphText.textContent = "Hesla nejsou shodná"
        paragraphText.classList.add("invalid")
        paragraphText.classList.remove("valid")
    }

    if (password1Value === "" && password2Value === "") {
        paragraphText.textContent = ""
    }
})