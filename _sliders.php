<article class="flexsliders container">

	<section class="flexslider-wrapper flexslider-wrapper-three">
		<div class="flexslider flexslider-three typo-center">
			<ul class="slides">
				<li class="shoe-side shoe-side--three">
					<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_3_side.png">
					<div class="hotspot"></div>
					<p class="hotspot-content">Strong lightweight flyknit upper provides snug supportive fit.</p>
				</li>
				<li class="shoe-back shoe-back--three">
					<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_3_back.png">
					<div class="hotspot"></div>
					<p class="hotspot-content">Lowest profile cushioning, rounded heel encourage natural footstrike.</p>
				</li>
				<li class="shoe-sole shoe-sole--three">
					<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_3_sole.png">
					<div class="hotspot"></div>
					<p class="hotspot-content">Hexagonal flex grooves let your foot move naturally.</p>
				</li>
			</ul>
		</div>
	</section>

	<? // JD haven't got womens's 4.0 i store as yet ?>
	<? if ( $gender == 'men' ) { ?>

	<section class="flexslider-wrapper flexslider-wrapper-four">
		<div class="flexslider flexslider-four typo-center">
			<ul class="slides">
				<li class="shoe-side shoe-side--four">
					<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_4_side.png">
					<div class="hotspot"></div>
					<p class="hotspot-content">Strong lightweight Flyknit upper provides contoured, supportive fit.</p>
				</li>
				<li class="shoe-back shoe-back--four">
					<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_4_back.png">
					<div class="hotspot"></div>
					<p class="hotspot-content">Lower-profile cushioning, rounded heel encourage natural footstrike.</p>
				</li>
				<li class="shoe-sole shoe-sole--four">
					<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_4_sole.png">
					<div class="hotspot"></div>
					<p class="hotspot-content">Hexagonal flex grooves let your foot move naturally.</p>
				</li>
			</ul>
		</div>
	</section>

	<? } ?>

	<section class="flexslider-wrapper flexslider-wrapper-five">
		<div class="flexslider flexslider-five typo-center">
			<ul class="slides">
				<li class="shoe-side shoe-side--five">
					<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_5_side.png">
					<div class="hotspot"></div>
					<p class="hotspot-content">Engineered upper supports you as it moves with you.</p>
				</li>
				<li class="shoe-back shoe-back--five">
					<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_5_back.png">
					<div class="hotspot"></div>
					<p class="hotspot-content">Low-profile cushioning, rounded heel encourage natural footstrike.</p>
				</li>
				<li class="shoe-sole shoe-sole--five">
					<img src="/assets/img/<?= $gender ?>/<?= $gender ?>_5_sole.png">
					<div class="hotspot"></div>
					<p class="hotspot-content">Hexagonal flex grooves let your foot move naturally.</p>
				</li>
			</ul>
		</div>
	</section>

</article>