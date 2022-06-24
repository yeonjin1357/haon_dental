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
		<li class="selected"><a href="<?php echo G5_URL ?>/basic_special.php" target="_self">통합진료의 특별함</a></li>
		<li><a href="<?php echo G5_URL ?>/root_canal.php" target="_self">MTA 신경치료</a></li>
		<li><a href="<?php echo G5_URL ?>/caries.php" target="_self">충치치료</a></li>
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
			$('.sub-menu02').prev().html('통합진료의 특별함');
		});
	</script>
</ul>
<section class="content special-title pb2 basic-special-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>하온치과 통합진료의 특별함</span></h3>
			<span class="slash"></span>
			<h4 style="font-weight: normal; font-family: sans-serif;">치과, 한 곳에서 치료 받으세요!<br>
			분야별 의료진이 통합적으로 진료합니다.</h4>
		</div>
	</div>
</section>

<section class="content basic-bg1 bg-gray">
	<div class="inner">
		<div class="middle-title" style="color: #fff;">
			<h4>하온치과 통합진료가 특별한 이유</h4>
			<p>모든 진료를 한 곳에서!
			분야별 협진 진료로 언제나 체계적인 진료를 보여드립니다.</p>
		</div>
		<ul class="col-3 sq-circle">
			<li data-aos="fade-up" data-aos-duration="2000">
				<span>01</span>
				<h5>자연치아 살리기
				“보존”치과</h5>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/basic_special_02.png" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<span>02</span>
				<h5>분야별
				의료진 협진</h5>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/basic_special_03.png" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
				<span>03</span>
				<h5>체계적인
				정기검진 시스템</h5>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/basic_special_04.png" alt="">
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<p>자연치아살리기를 우선으로 합니다</p>
			<h4>하온치과의 통합진료는 특별합니다!</h4>
		</div>
		<div data-aos="zoom-in" data-aos-duration="2000">
			<img src="<? echo G5_THEME_IMG_URL; ?>/sub/basic_special_05.jpg" alt="">
		</div>
	</div>
</section>



<style>

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