const temaOscuro = () => {
    /*main*/
    document.querySelector("body").setAttribute("data-bs-theme", "dark");
    document.querySelector("body").setAttribute("class", "d-flex flex-column h-100 dark")
    document.querySelector("header").setAttribute("class", "d-flex flex-wrap p-3 bg-secondary");
    document.querySelector("#btn-login").setAttribute("class", "abeezee-regular btn btn-info");
    document.querySelector("#btn-sign-up").setAttribute("class", "abeezee-regular btn btn-info");
    document.querySelector("nav").setAttribute("class", "navbar navbar-expand-lg navbar-secondary bg-info");
    document.querySelector("#bienvenida").setAttribute("class", "bg-secondary border rounded border-4 border-info p-5 mx-auto mt-4");
    document.querySelector("#card-movie").setAttribute("class", "card text-center flex-column mx-5 bg-info");
    document.querySelector("#card-movie-p").setAttribute("class", "card-text inika-regular text-light");
    document.querySelector("#card-serie").setAttribute("class", "card text-center flex-column mx-5 bg-info");
    document.querySelector("#card-serie-p").setAttribute("class", "card-text inika-regular text-light");
    document.querySelector("#card-videogame").setAttribute("class", "card text-center flex-column mx-5 bg-info");
    document.querySelector("#card-videogame-p").setAttribute("class", "card-text inika-regular text-light");
    document.querySelector("#card-book").setAttribute("class", "card text-center flex-column mx-5 bg-info");
    document.querySelector("#card-book-p").setAttribute("class", "card-text inika-regular text-light");
    document.querySelector("footer").setAttribute("class", "footer mt-auto p-3 bg-secondary fixed-bottom");
    document.querySelector("#btn-modo").setAttribute("class", "btn btn-info icon-day-mode");
    const modo = "Modo claro";
    document.getElementById("modo").innerHTML = modo;
    document.querySelector("#btn-mail").setAttribute("class", "btn btn-info icon-dark-mail");
    document.querySelector("#twitter").setAttribute("class", "btn btn-info icon-dark-tw");
    document.querySelector("#insta").setAttribute("class", "btn btn-info icon-dark-ig");
    document.querySelector("#facebook").setAttribute("class", "btn btn-info icon-dark-fb");

    /*modales*/
    document.querySelector("#card-mail").setAttribute("class", "modal-content bg-secondary");
    document.querySelector("#card-login").setAttribute("class", "modal-content bg-secondary");
    document.querySelector("#btn-card-login").setAttribute("class", "btn btn-light btn-block mb-4");
    document.querySelector("#card-sign-up").setAttribute("class", "modal-content bg-secondary");
    document.querySelector("#btn-card-sign-up").setAttribute("class", "btn btn-light btn-block mb-4");
}

const temaClaro = () => {
    /*main*/
    document.querySelector("body").setAttribute("data-bs-theme", "light");
    document.querySelector("body").setAttribute("class", "d-flex flex-column h-100")
    document.querySelector("header").setAttribute("class", "d-flex flex-wrap p-3 bg-primary");
    document.querySelector("#btn-login").setAttribute("class", "abeezee-regular btn btn-secondary");
    document.querySelector("#btn-sign-up").setAttribute("class", "abeezee-regular btn btn-secondary");
    document.querySelector("nav").setAttribute("class", "navbar navbar-expand-lg navbar-primary bg-secondary");
    document.querySelector("#bienvenida").setAttribute("class", "bg-primary border rounded border-4 border-secondary p-5 mx-auto mt-4");
    document.querySelector("#card-movie").setAttribute("class", "card text-center flex-column mx-5 bg-secondary");
    document.querySelector("#card-movie-p").setAttribute("class", "card-text inika-regular text-dark");
    document.querySelector("#card-serie").setAttribute("class", "card text-center flex-column mx-5 bg-secondary");
    document.querySelector("#card-serie-p").setAttribute("class", "card-text inika-regular text-dark");
    document.querySelector("#card-videogame").setAttribute("class", "card text-center flex-column mx-5 bg-secondary");
    document.querySelector("#card-videogame-p").setAttribute("class", "card-text inika-regular text-dark");
    document.querySelector("#card-book").setAttribute("class", "card text-center flex-column mx-5 bg-secondary");
    document.querySelector("#card-book-p").setAttribute("class", "card-text inika-regular text-dark");
    document.querySelector("footer").setAttribute("class", "footer mt-auto p-3 bg-primary fixed-bottom");
    document.querySelector("#btn-modo").setAttribute("class", "btn btn-secondary icon-night-mode");
    const modo = "Modo oscuro";
    document.getElementById("modo").innerHTML = modo;
    document.querySelector("#btn-mail").setAttribute("class", "btn btn-secondary icon-dark-mail");
    document.querySelector("#twitter").setAttribute("class", "btn btn-secondary icon-dark-tw");
    document.querySelector("#insta").setAttribute("class", "btn btn-secondary icon-dark-ig");
    document.querySelector("#facebook").setAttribute("class", "btn btn-secondary icon-dark-fb");

    /*modales*/
    document.querySelector("#card-mail").setAttribute("class", "modal-content bg-primary");
    document.querySelector("#card-login").setAttribute("class", "modal-content bg-primary");
    document.querySelector("#btn-card-login").setAttribute("class", "btn btn-light btn-block mb-4");
    document.querySelector("#card-sign-up").setAttribute("class", "modal-content bg-primary");
    document.querySelector("#btn-card-sign-up").setAttribute("class", "btn btn-light btn-block mb-4");
}

const cambiarTema = () => {
    document.querySelector("body").getAttribute("data-bs-theme") === "light"?
    temaOscuro() : temaClaro();

    if(document.body.classList.contains("dark")){
        localStorage.setItem("darkMode", true);
    } else {
        localStorage.setItem("darkMode", false);
    }
};

if(localStorage.getItem("darkMode") === true){
    temaOscuro();
} 