let navLinks = document.querySelectorAll('.nav__link');

for (let i = 0; i < navLinks.length; i++) {
  let navLink = navLinks[i];

  navLinks[0].classList.add('nav__link--active');
}
