
  // HEADER HAMBURGER MENU
    const navELement = document.querySelector('.navbar');
    const hamburgerElement = document.querySelector('.hamburger');
    const navLinksElement = document.querySelectorAll('.nav__item');

  hamburgerElement.addEventListener('click', () => {
        navELement.classList.toggle('nav--open');
    hamburgerElement.classList.toggle('hamburger--open');
  });

  navLinksElement.forEach((link) => {
        link.addEventListener('click', () => {
            navELement.classList.remove('nav--open');
            hamburgerElement.classList.remove('hamburger--open');
        });
  });
