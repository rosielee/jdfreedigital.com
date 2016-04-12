<section class="grid slider-ctrl typo-center container">

	<div data-flexslider="three" class="slider-ctrl-unit unit size1of2">
		<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_3_side_thumbnail.png">
		<h3 class="typo-bold">NIKE FREE 3.0</h3>
	</div>

	<? // JD haven't got womens's 4.0 i store as yet ?>
	<? if ( $gender == 'men' ) { ?>

	<div data-flexslider="four" class="slider-ctrl-unit unit size1of2">
		<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_4_side_thumbnail.png">
		<h3 class="typo-bold">NIKE FREE 4.0</h3>
	</div>

	<? } ?>

	<div data-flexslider="five" class="slider-ctrl-unit unit size1of2 inactive">
		<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_5_side_thumbnail.png">
		<h3 class="typo-bold">NIKE FREE 5.0</h3>
	</div>

</section>