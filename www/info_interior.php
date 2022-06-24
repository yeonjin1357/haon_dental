<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg about-bg">
	<p>HAON DENTAL CLINIC</p>
	<h2><span>하온치과</span> 소개</h2>
	<hr>
</div>
<div class="nav-menu pc-nav">
	<ul>
		<li><a href="<?php echo G5_URL ?>/about.php" target="_self">정직한 진료 원칙</a></li>
		<li><a href="<?php echo G5_URL ?>/info_dentist.php" target="_self">경험이 다른 의료진</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/info_interior.php" target="_self">둘러보기</a></li>
		<li><a href="<?php echo G5_URL ?>/info_time.php" target="_self">진료시간 및 예약안내</a></li>
		<li><a href="<?php echo G5_URL ?>/info_map.php" target="_self">찾아오시는 길</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/about_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('둘러보기');
		});
	</script>
</ul>
<section class="content info_equipment">
	<div class="inner">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>둘러보기</span></h3>
		</div>
		<div id="gallery">
			<div class="swiper-container gallery-top">
				<div class="swiper-wrapper">
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/1.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/2.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/3.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/4.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/5.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/6.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/7.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/8.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/9.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/10.jpg" alt=""></div></div>
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
			<div class="swiper-container gallery-thumbs">
				<div class="swiper-wrapper">
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/1.jpg" alt=""></div></div>
					<div class="swiper-slide" tabindex="0" role="button"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/2.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/3.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/4.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/5.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/6.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/7.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/8.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/9.jpg" alt=""></div></div>
					<div tabindex="0" role="button" class="swiper-slide"><div class="swiper-slide-container"><img src="<? echo G5_THEME_IMG_URL; ?>/gallery/10.jpg" alt=""></div></div>
				</div>
			</div>
			<!-- Initialize Swiper -->
			<script>
				$(document).ready(function(){
					var galleryTop= new Swiper('.gallery-top', {
						spaceBetween: 10,
						navigation: {
							nextEl: '.swiper-button-next',
							prevEl: '.swiper-button-prev',
						},
						loop: true,
						loopedSlides: 5
					});
					var galleryThumbs= new Swiper('.gallery-thumbs', {
					  spaceBetween: 10,
					  centeredSlides: false,
					  slidesPerView: 'auto',
					  touchRatio: 0.2,
					  slideToClickedSlide: true,
						  loop: true,
						  loopedSlides: 5
					});
					galleryTop.controller.control= galleryThumbs;
					galleryThumbs.controller.control= galleryTop;
				});
			</script>
		</div><!-- gallery-->
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>