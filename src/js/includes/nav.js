let navLinks = document.querySelectorAll('.nav__link');

for (let i = 0; i < navLinks.length; i++) {
  let navLink = navLinks[i];
}

let menuBtn = document.querySelector('.js-burger-btn');

let	menuBurger = menuBtn.querySelector('.main-header__burger');

let	topHeaderNav = document.querySelector('.js-main-header-nav');

let topHeaderNavLinks = topHeaderNav.querySelectorAll('.js-nav-link');

menuBtn.addEventListener('click', () => {
  if (menuBurger.classList.contains('active')) {
    menuBurger.classList.remove('active');
    topHeaderNav.classList.remove('active');
  } else {
    menuBurger.classList.add('active');
    topHeaderNav.classList.add('active');
  }
});

for (let i = 0; i < topHeaderNavLinks.length; i++) {
  let navLink = topHeaderNavLinks[i];

  navLink.addEventListener('click', () => {
    if (menuBurger.classList.contains('active')) {
      menuBurger.classList.remove('active');
      topHeaderNav.classList.remove('active');
    } else {
      menuBurger.classList.add('active');
      topHeaderNav.classList.add('active');
    }
  });
}
