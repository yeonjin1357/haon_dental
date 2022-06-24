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
		<li><a href="<?php echo G5_URL ?>/caries.php" target="_self">충치치료</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/gum_therapy.php" target="_self">잇몸치료</a></li>
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
			$('.sub-menu02').prev().html('잇몸치료');
		});
	</script>
</ul>
<section class="content special-title pb2 gum-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>잇몸치료</span></h3>
			<span class="slash"></span>
			<h4 >성인의 80%가 앓고 있는 흔한 병, 잇몸질환<br>
			방치하면 잇몸과 치아가 무너집니다.</h4>
		</div>
	</div>
</section>

<section class="content pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5><span class="point-color">잇몸치료</span>란?</h5>
				<p>‘풍치’라고도 불리는 치주질환은
				성인 10명 중 8명 이상이 가지고 있는 질환입니다.
				초기에는 통증이 거의 없다가 만성이 돼서야 알게 되기 때문에
				증상이 나타났을 때는  간단한 스케일링 치료로 끝나지 않을 때가 있습니다. 
				가벼운 잇몸질환은 스케일링 만으로도 치료가 가능합니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>잇몸질환 진행단계 및 치료방법</h4>
		</div>
		<ul class="col-4 line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_03.png" alt="">
				<span class="circle-step">01</span>
				<div class="caries-txt">
					<h5>건강한 잇몸</h5>
					<p class="pt5 pb5">(치주낭 길이 3mm이하)</p>
				</div>
				<h5 class="point-color">[치료방법]</h5>
				<p class="fw500">스케일링 치료</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_04.png" alt="">
				<span class="circle-step">02</span>
				<div class="caries-txt">
					<h5>치은염</h5>
					<p class="pt5 pb5">(치주낭 길이 3~5mm이하)</p>
				</div>
				<h5 class="point-color">[치료방법]</h5>
				<p class="fw500">치근활택술 치료</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_05.png" alt="">
				<span class="circle-step">03</span>
				<div class="caries-txt">
					<h5>초기 치주염</h5>
					<p class="pt5 pb5">(치주낭 길이 5~7mm이하)</p>
				</div>
				<h5 class="point-color">[치료방법]</h5>
				<p class="fw500">치주소파술 치료</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/gum_therapy_06.png" alt="">
				<span class="circle-step">04</span>
				<div class="caries-txt">
					<h5>중기 치주염</h5>
					<p class="pt5 pb5">(치주낭 길이 7mm이상)</p>
				</div>
				<h5 class="point-color">[치료방법]</h5>
				<p class="fw500">치주수술</p>
			</li>
		</ul>
	</div>
</section>



<style>
	.line-list li img{border: none;}

	@media screen and (max-width:769px) {

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