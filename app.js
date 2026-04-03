// NEW NAVBAR ANIMATION //

const navbarLinks = document.getElementsByClassName('nav-links')[0];
const navUL = document.querySelector('.nav-ul');
const navbar = document.getElementsByClassName('navbar')[0];
const burger = document.querySelector(".burger");
const line3 = document.querySelector('.line3');


// Event Listeners
burger.addEventListener('click', navToggle);

// toggleButton.addEventListener('click', () => {
//     setTimeout(function() {
//         navbarLinks.classList.add('active')
//     }, (500));
    
//   })

// Functions 

function navToggle(e) {
    if (!e.target.classList.contains("active-toggle")) {
        e.target.classList.add("active-toggle");
        document.body.classList.add('hide');
        navUL.classList.add("active");
        gsap.to('.line1', 0.5, { rotate: "45", y: 11 });
        gsap.to('.line2', 0.5, { rotate: "-45", y: -7 });
        gsap.to('.white-circle', 1, {clipPath: 'circle(2500px at 100% -10%)'});
        line3.classList.add('display-none');
        setTimeout(function() {
            navbarLinks.classList.add('active')
        }, (300));
    } else {
        e.target.classList.remove("active-toggle");
        document.body.classList.remove('hide');
        setTimeout(function() {
            navbarLinks.classList.remove('active')
        }, (100));
        gsap.to('.line1', 0.5, { rotate: "0", y: 0 });
        gsap.to('.line2', 0.5, { rotate: "0", y: 0 });
        gsap.to('.white-circle', 1, {clipPath: 'circle(50px at 100% -10%)'});
        line3.classList.remove('display-none'); 
        navUL.classList.remove("active");
    }
};