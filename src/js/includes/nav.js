let menuBtn = document.querySelector('.js-burger-btn');

let menuBurger = menuBtn.querySelector('.main-header__burger');

let topHeaderNav = document.querySelector('.js-main-header-nav');

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

// Бордер у активного пункта

if ($(window).width() > 768) {
  $('.nav__list').append("<li class='nav__border-bottom'></li>");

  let $magicLine = $('.nav__border-bottom');

  $('.nav__item').first().addClass('nav__item--active');
  $magicLine
    .width($('.nav__item--active').width())
    .css('left', $('.nav__item--active .nav__link').position().left)
    .data('origLeft', $magicLine.position().left)
    .data('origWidth', $magicLine.width());

  $('.nav__item')
    .find('.nav__link')
    .hover(
      function () {
        let $el = $(this);

        let leftPos = $el.position().left;

        let newWidth = $el.parent().width();

        $magicLine.stop().animate({
          left: leftPos,
          width: newWidth,
        });
      },

      function () {
        $magicLine.stop().animate({
          left: $magicLine.data('origLeft'),
          width: $magicLine.data('origWidth'),
        });
      });
} else {
  let $magicLine = $('.nav__border-bottom');

  $magicLine.remove();
}

$(window).on('resize', function () {
  if ($(window).width() > 768) {
    let $magicLine = $('.nav__border-bottom');

    console.log($magicLine);

    if ($magicLine.length === 0) {
      $('.nav__list').append("<li class='nav__border-bottom'></li>");
    }


    $('.nav__item').first().addClass('nav__item--active');
    $magicLine
      .width($('.nav__item--active').width())
      .css('left', $('.nav__item--active .nav__link').position().left)
      .data('origLeft', $magicLine.position().left)
      .data('origWidth', $magicLine.width());

    $('.nav__item')
      .find('.nav__link')
      .hover(
        function () {
          let $el = $(this);

          let leftPos = $el.position().left;

          let newWidth = $el.parent().width();

          $magicLine.stop().animate({
            left: leftPos,
            width: newWidth,
          });
        },

        function () {
          $magicLine.stop().animate({
            left: $magicLine.data('origLeft'),
            width: $magicLine.data('origWidth'),
          });
        });
  } else {
    let $magicLine = $('.nav__border-bottom');

    $magicLine.remove();
  }
});

