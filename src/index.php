<!DOCTYPE html>
<html lang="ru">
<?php
	$defaultPath = './';
	$pageTitle = ' ';
	require('./data.php');
	require('./includes/head.php');
?>
<body>
<?php
	require('./includes/header.php');
?>
<main class="wrapper">
	<div class="promo">
		<div class="promo__container container">
			<div class="promo-picture">
				<div class="good-image">
					<img src="<?= $imgGood?>" srcset="<?= $imgX2Good?>" alt="<?= $altGood?>">
				</div>

				<div class="plants-image">
					<img src="<?= $imgPlantsFirst?>" srcset="<?= $imgX2PlantsFirst?>" alt="<?= $altPlantsFirst?>">
				</div>

				<div class="plants-image-1">
					<img src="<?= $imgPlantsSecond?>" srcset="<?= $imgX2PlantsSecond?>" alt="<?= $altPlantsSecond?>">
				</div>

				<footer class="promo-picture__footer">
					<?= $promoPictureFooter?>
				</footer>
			</div>

			<article class="promo-description">
				<h1 class="promo-description__title"><?= $titlePromo?></h1>
				<p class="promo-description__subtitle"><?= $subTitlePromo?></p>
				<ul class="promo-description__list">
					<li class="promo-description__list-item">
						<i class="sprite-ic_clock"></i>
						<span>сокращает продолжительность и выраженность диареи</span>
					</li>
					<li class="promo-description__list-item">
						<i class="sprite-ic_drop"></i>
						<span>восстанавливает водно-солевой баланс</span>
					</li>
				</ul>
			</article>
		</div>
	</div>
</main>
<?php
	require('./includes/footer.php');
?>
</body>
</html>