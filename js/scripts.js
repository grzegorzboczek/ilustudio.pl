//////////////////////
// Gallery
const image = document.getElementById("image");

// Declare images links (production)
const images = [
    'https://ilustudio.pl/wp-content/themes/ilu_studio_wp/img/gallery/08.png',
    'https://ilustudio.pl/wp-content/themes/ilu_studio_wp/img/gallery/01.png',
    'https://ilustudio.pl/wp-content/themes/ilu_studio_wp/img/gallery/02.png',
    'https://ilustudio.pl/wp-content/themes/ilu_studio_wp/img/gallery/03.png',
    'https://ilustudio.pl/wp-content/themes/ilu_studio_wp/img/gallery/04.png',
    'https://ilustudio.pl/wp-content/themes/ilu_studio_wp/img/gallery/05.png',
    'https://ilustudio.pl/wp-content/themes/ilu_studio_wp/img/gallery/06.png',
    'https://ilustudio.pl/wp-content/themes/ilu_studio_wp/img/gallery/07.png',
    'https://ilustudio.pl/wp-content/themes/ilu_studio_wp/img/gallery/09.png',
]
// Declare counter
let counter = 0;

// Declare basic img at start
image.src = images[counter];

////////////////////////////
// Next images
const next = document.getElementById("next");

function functionNext() {
    if (counter <= 7) {
        counter = counter + 1;
        image.src = images[counter];
    } else {
        counter = 0;
        image.src = images[counter];
    }
}

next.addEventListener("click", functionNext);


// Previous images
const prev = document.getElementById("prev");

function functionPrev() {
    if (counter === 0) {
        counter = 8;
        image.src = images[counter];

    } else if (counter >= 1) {
        counter = counter - 1;
        image.src = images[counter];
    }
}

prev.addEventListener("click", functionPrev);


////////////////////////////
// Open/Close Hamburger Menu
const open = document.querySelector('#open');
const close = document.getElementById('close');

const fullWidth = document.getElementById('menu');
const ul = document.getElementById('ul');
const logo = document.getElementById('logo');


open.addEventListener("click", () => {
    fullWidth.setAttribute("style","height: 100vh");
    logo.setAttribute("style","opacity: 1");
    close.setAttribute("style","display: flex");
    

    setTimeout( () => { 
        ul.setAttribute("style","visibility: visible");
    }
    , 1000);
});

close.addEventListener("click", () => {
    fullWidth.setAttribute("style","height: 0vh");

    ul.setAttribute("style","opacity: 0");
    logo.setAttribute("style","opacity: 0");
    close.setAttribute("style","display: none");
});

// Close menu if link clicked
ul.addEventListener("click", () => {
    fullWidth.setAttribute("style","height: 0vh");
    ul.setAttribute("style","opacity: 0");
    logo.setAttribute("style","opacity: 0");
    close.setAttribute("style","display: none");
});