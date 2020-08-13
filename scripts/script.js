const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');

    burger.addEventListener('click', () => {
        //Nav animation
        nav.classList.toggle('nav-active');
        //Burger animation
        burger.classList.toggle('toggle');
    });
}

const parallax = () => {
    let image = document.querySelector('.parallax-img');
    new simpleParallax(image, {
        delay: .6,
        scale: 1.2
    });
}

const app = () => {
    navSlide();
    parallax();
}

app();




