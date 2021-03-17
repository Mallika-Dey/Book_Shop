function navActive() {
    const navLinks = document.querySelectorAll('.nav-links li');
    document.querySelector('.nav-links').classList.toggle('nav-active');
    const main = document.querySelector('.main');
    for (var i = 0; i < navLinks.length; i++) {
        if (navLinks[i].style.animation) {
            navLinks[i].style.animation = "";
        } else {
            navLinks[i].style.animation = 'navLinkFade 0.5s ease forwards ' + (i / 7 + 1) + 's';
        }
    }
    burger.classList.toggle('toggle');
    main.classList.toggle('hideall');
    if (document.getElementsByClassName('hideall').length == 0)
        main.style.animation = "mainanimate 1.9s ease-in";
    else main.style.animation = "";
}

let burger = document.querySelector('.burger');
if (burger != null)
    burger.addEventListener('click', navActive, false);

//for dropdown menu
/*function openDropdown() {
    let dropdown_content = document.querySelector('.dropdown_content');
    console.log(dropdown_content);
    dropdown_content.classList.toggle('display');
}

let dropdown = document.querySelector('.drop_btn');
if (dropdown != null) {
    dropdown.addEventListener('click', openDropdown, false);
}*/