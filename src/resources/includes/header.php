<header class="main-header">
  <div class="main-header__container container">
    <a href="#" class="main-header__logo">РЕГИДРОН БИО</a>
    <nav class="nav js-main-header-nav">
      <ul class="nav__list">
        <?php foreach($headerMenuItems as $headerMenuItem) : ?>
          <li class="nav__item">
            <a href="#" class="nav__link js-nav-link"><?php echo $headerMenuItem; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
    <button class="main-header__burger-btn js-burger-btn">
      <span class="main-header__burger">
        <span class="main-header__burger-topper"></span>
        <span class="main-header__burger-bottom"></span>
        <span class="main-header__burger-footer"></span>
      </span>
    </button>
  </div>
</header>