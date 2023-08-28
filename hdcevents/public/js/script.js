let img = document.querySelector(".logo img");
let titlePage = document.querySelector("head title");

console.log(titlePage.textContent == "Criar Evento");

if (titlePage.textContent === "Criar Evento") {
    document.querySelector("header").classList.add("active");
    for (let a of document.querySelectorAll("header nav .menu li a")) {
        a.classList.add("active");
    }
    img.setAttribute("src", "./img/experienceEventsLogo.svg");
    document.querySelector("header").style.position = "relative";
} else {
    window.addEventListener("scroll", () => {
        if (window.scrollY >= 40) {
            document.querySelector("header").classList.add("active");
            for (let a of document.querySelectorAll("header nav .menu li a")) {
                a.classList.add("active");
            }
            img.setAttribute("src", "./img/experienceEventsLogo.svg");
        } else {
            document.querySelector("header").classList.remove("active");
            for (let a of document.querySelectorAll("header nav .menu li a")) {
                a.classList.remove("active");
            }
            img.setAttribute("src", "./img/experienceLogoWhite.svg");
        }
    });
}
