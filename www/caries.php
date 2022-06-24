<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg basic-bg">
	<p>HAON DENTAL CLINIC</p>
	<h2><span>HAON : </span>통합진료</h2>
	<hr>
</div>
<div class="nav-menu pc-nav">
	<ul>
		<li><a href="<?php echo G5_URL ?>/basic_special.php" target="_self">통합진료의 특별함</a></li>
		<li><a href="<?php echo G5_URL ?>/root_canal.php" target="_self">MTA 신경치료</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/caries.php" target="_self">충치치료</a></li>
		<li><a href="<?php echo G5_URL ?>/gum_therapy.php" target="_self">잇몸치료</a></li>
		<li><a href="<?php echo G5_URL ?>/wisdom.php" target="_self">사랑니 발치</a></li>
		<li><a href="<?php echo G5_URL ?>/jaw_joint.php" target="_self">턱관절 치료</a></li>
		<li><a href="<?php echo G5_URL ?>/prosthetic.php" target="_self">보철치료</a></li>
		<li><a href="<?php echo G5_URL ?>/children.php" target="_self">소아진료</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/basic_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('충치치료');
		});
	</script>
</ul>
<section class="content special-title pb2 caries-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>충치치료</span></h3>
			<span class="slash"></span>
			<h4 >뽑지 않고 최대한 살리는 충치치료<br>
			보존을 원칙으로 치료합니다.</h4>
		</div>
	</div>
</section>

<section class="content pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5><span class="point-color">충치치료</span>란?</h5>
				<p>충치균은 감염속도가 빠르고 방치 시
				더 큰 치아손상을 일으키므로 조기에 치료하는 것이 중요합니다.
				염증을 제거한 후 인체에 무해한 치과 재료를 빈 공간에 채워 넣어
				남아있는 치아를 보호해주는 치료입니다. 

				한번 생긴 충치는 자연회복이 되지 않으므로
				조기에 발견하여 치료하는 것이 좋습니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>충치 진행단계 및 치료방법</h4>
		</div>
		<ul class="col-4 line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_03.png" alt="">
				<span class="circle-step">01</span>
				<div class="caries-txt">
					<h5>법랑질 충치</h5>
					<p>치아 겉면인 법랑질의<br>
					충치로 통증이 없습니다.</p>
				</div>
				<h5 class="point-color">[치료방법]</h5>
				<p class="fw500">주의관찰 및 정기검진<br>
				예방적 레진치료</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_04.png" alt="">
				<span class="circle-step">02</span>
				<div class="caries-txt">
					<h5>상아질 충치</h5>
					<p>법랑질 안쪽 상아질까지<br>
					충치가 진행되어<br>
					뜨겁거나 차가운 음식을 먹으면<br>
					시린 증상이 나타납니다.</p>
				</div>
				<h5 class="point-color">[치료방법]</h5>
				<p class="fw500">인레이</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_05.png" alt="">
				<span class="circle-step">03</span>
				<div class="caries-txt">
					<h5>치수염 충치</h5>
					<p>상아질 안쪽 신경까지<br>
					염증이 진행되어<br>
					극심한 통증으로<br>
					참기 어려운 정도가 됩니다.</p>
				</div>
				<h5 class="point-color">[치료방법]</h5>
				<p class="fw500">신경치료 + 크라운</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/caries_06.png" alt="">
				<span class="circle-step">04</span>
				<div class="caries-txt">
					<h5>치수괴사</h5>
					<p>치아 내부에 있는 조직이 괴사되고<br>
					뿌리 주변의 염증으로 인해<br>
					뼈가 점차 소실됩니다.</p>
				</div>
				<h5 class="point-color">[치료방법]</h5>
				<p class="fw500">신경치료 또는 임플란트</p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner tac bg-gray" style="max-width: 1000px; margin: 0 auto; border-radius: 10px; padding: 3% 0;">
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_12.png" alt="">
		<div class="middle-title mt3 mb0">
			<p>하온치과는 충치치료가 끝나도
			체계적인 정기검진으로 끝까지 관리합니다.</p>
		</div>	
	</div>
</section>


<style>
	.line-list li img{border: none;}
	.caries-txt{height: 200px;}

	@media screen and (max-width:769px) {
		.caries-txt{height: 140px;}
	}
	
	@media screen and (max-width:425px) {

	}
</style>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>