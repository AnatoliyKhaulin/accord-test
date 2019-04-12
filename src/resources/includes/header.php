<header class="main-header">
  <div class="main-header__container container">
    <a href="#" class="main-header__logo">РЕГИДРОН БИО</a>
    <nav class="nav">
      <ul class="nav__list">
        <?php foreach($headerMenuItems as $headerMenuItem) : ?>
          <li class="nav__item">
            <a href="#" class="nav__link"><?php echo $headerMenuItem; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</header>