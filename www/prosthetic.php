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
		<li><a href="<?php echo G5_URL ?>/gum_therapy.php" target="_self">잇몸치료</a></li>
		<li><a href="<?php echo G5_URL ?>/wisdom.php" target="_self">사랑니 발치</a></li>
		<li><a href="<?php echo G5_URL ?>/jaw_joint.php" target="_self">턱관절 치료</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/prosthetic.php" target="_self">보철치료</a></li>
		<li><a href="<?php echo G5_URL ?>/children.php" target="_self">소아진료</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/basic_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('보철치료');
		});
	</script>
</ul>
<section class="content special-title pb2 prosthetic-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>보철치료</span></h3>
			<span class="slash"></span>
			<h4 >분야별 의료진 협진으로<br>
			질 높은 치과치료를 시행합니다.</h4>
		</div>
	</div>
</section>

<section class="content pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/prosthetic_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5><span class="point-color">보철치료</span>란?</h5>
				<p>치아가 손상되거나 상실되었을 때 인공보철물을 대체함으로써
				원래의 치아의 기능 즉, 저작기능 뿐 아니라 발음과 심미성까지
				회복시켜주는 치료입니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content bg-gray basic-bg4">
	<div class="inner tac">
		<div class="middle-title">
			<h4 style="color: #fff;">보철치료의 중요성</h4>
		</div>
		<ul class="strengths fw500" style="max-width: 800px; margin: 0 auto;">
			<li>
				<p>치아가 상실된 경우 비어있는 공간으로 치아가 쓰러지는 도미노 현상이 나타날 수 있습니다.</p>
			</li>
			<li>
				<p>치아의 상실로 교합이 불안정하면 턱관절 통증도 유발 할 수 있습니다.</p>
			</li>
			<li>
				<p>불편한 쪽으로 씹기 힘들어지면서 얼굴 형태의 변화가 생깁니다.</p>
			</li>
			<li>
				<p>전체적으로 치열이 변화하게 됩니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content pt5">
	<div class="inner" style="max-width: 1000px;">
		<div class="middle-title">
			<h4>치아수명이 결정되는 보철치료<br>
			불편한 보철 NO! <span class="point-color">편안한 보철 YES!</span></h4>
		</div>
		<!-- <ul class="col-2 line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/prosthetic_03.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/prosthetic_03.png" alt="">
			</li>
		</ul> -->
		<div class="middle-title mt5">
			<p>보철치료 받았던 치아가 불편하다면 내원 후 검진 받아보세요.
			경험에서 나오는 노하우로 원인을 파악하고 개선해드리겠습니다.</p>
		</div>
	</div>
</section>

<section class="content">
	<div class="inner" style="max-width: 1000px;">
		<div class="middle-title">
			<h4>보철치료 재료</h4>
		</div>
		<ul class="col-2 line-list ss">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/prosthetic_05.png" alt="">
				<h5>크라운</h5>
				<p>치아를 보호하기 위해 치아머리에<br>
				크라운 보철물을 전체적으로 씌워주는 치료 방법</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/prosthetic_06.png" alt="">
				<h5>브릿지</h5>
				<p>치아가 없는 부위 양 옆 치아를 이용하여<br>
				다리를 연결하듯 브릿지 보철물을<br>
				양쪽 치아에 걸어서 덮어 씌워주는 치료방법</p>
			</li>
		</ul>
		<ul class="col-4 line-list mt5">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/prosthetic_07.png" alt="">
				<h5>PFM</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/prosthetic_08.png" alt="">
				<h5>지르코니아</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/prosthetic_09.png" alt="">
				<h5>올세라믹</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/prosthetic_10.png" alt="">
				<h5>골드</h5>
			</li>
		</ul>
	</div>
</section>


<style>
	.line-list li img{border: none;}
	.strengths li:before{display: none;}
	.strengths li{background-color: rgba(255, 255, 255, 0.8);}
	.strengths li p{color: #333;}
	.basic-bg4{padding: 7% 0;}

	@media screen and (max-width:769px) {
	}
	
	@media screen and (max-width: 425px){
		.ss li{max-width: 60%; margin: 0 auto !important; margin-bottom: 3% !important;}
	}	
</style>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>