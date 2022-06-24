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
		<li class="selected"><a href="<?php echo G5_URL ?>/root_canal.php" target="_self">MTA 신경치료</a></li>
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
			$('.sub-menu02').prev().html('MTA 신경치료');
		});
	</script>
</ul>
<section class="content special-title pb2 root-canal-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>신경치료</span></h3>
			<span class="slash"></span>
			<h4 >소중한 내 치아 살리기<br>
			하온치과가 함께합니다.</h4>
		</div>
	</div>
</section>

<section class="content pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5><span class="point-color">MTA 신경치료</span>란?</h5>
				<p>신경을 제거하고 생체에 적합한 MTA로 채워 넣는 술식을
				신경치료라고 합니다.

				충치나 세균에 감염된 혈관, 신경부위만 치료하거나
				제거함으로써 치아를 뽑지 않고
				다시 사용할 수 있도록 보존해 드립니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>신경치료 과정</h4>
		</div>
		<ul class="col-5 line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_03.png" alt="">
				<span class="circle-step">01</span>
				<h5 class="point-color">구강검진</h5>
				<p>치아의 형태나 충치,<br>
				신경치료 계획 수립</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_04.png" alt="">
				<span class="circle-step">02</span>
				<h5 class="point-color">충치 / 염증 제거</h5>
				<p>국소 마취 후<br>
				충치를 제거하고<br>
				뿌리 쪽 신경에 생긴 염증 제거</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_05.png" alt="">
				<span class="circle-step">03</span>
				<h5 class="point-color">치아 조직 제거</h5>
				<p>신경관 소독 후<br>
				남아있는 치수 조직과<br>
				변성된 치아 조직 제거</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_06.png" alt="">
				<span class="circle-step">04</span>
				<h5 class="point-color">채우기</h5>
				<p>치아 뿌리 내부를<br>
				MTA 충전재로 채우기</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_07.png" alt="">
				<span class="circle-step">05</span>
				<h5 class="point-color">보철치료</h5>
				<p>치아 머리 부분을<br>
				보철로 수복</p>	
			</li>

		</ul>
	</div>
</section>

<section class="content bg-gray basic-bg2">
	<div class="inner">
		<div class="basic-bg2-txt">
			<h3>신경치료
			전문의에게 받아야합니다.</h3>
			<p>신경치료는 발치 전 내 치아를 살리기 위한
			마지막 치료방법입니다.
			그렇기 때문에 숙련된 의료진의 경험과 노하우가 필요합니다.</p>
		</div>
	</div>
</section>

<section class="content pt5">
	<div class="inner bg-gray basic-bg3">
		<div class="basic-bg3-txt">
			<h4>우수성을 검증 받은 MTA를 사용합니다!</h4>
			<p>MTA는 생체조직의 적합성이 우수하고
			밀폐성이 다른 기존 재료에 비해 월등합니다.
			하온치과는 생체친화성이 우수한 MTA재료를 사용합니다.</p>
		</div>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<p>신경치료만으로 회복이 어려울 경우</p>
			<h4>치근단절제술을 진행합니다.</h4>
		</div>
		<!-- <ul class="col-3">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_09.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_09.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_09.png" alt="">
			</li>
		</ul> -->
	</div>
</section>

<section class="content">
	<div class="inner tac bg-gray" style="max-width: 1000px; margin: 0 auto; border-radius: 10px; padding: 3% 0;">
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/root_canal_12.png" alt="">
		<div class="middle-title mt3 mb0">
			<p>신경치료만으로 회복이 되지 않는 치아의 경우 치조골 주위에 있는 염증을 제거하는 치근단절제술을 시행합니다.
			치근단절제술은 치수에 염증으로 치아 뿌리까지 염증이 생긴 경우, 신경치료 후에도 통증이 재발하는 경우 등
			기존의 신경치료로 해결하지 못한 경우에 진행할 수 있는 치료 방법입니다.</p>
		</div>	
	</div>
</section>


<style>
	.col-5{flex-wrap:nowrap;}
	.col-5 li{width: calc(20% - 2%); margin: 0 2% !important;}
	.line-list li img{border: none;}
	.basic-bg2-txt, .basic-bg3-txt{color: #fff; white-space: pre-line;}
	.basic-bg2-txt h3{font-weight: 500;}
	.basic-bg3-txt{text-align: center;}
	.basic-bg2{padding: 10% 0;}
	.basic-bg3{padding: 7% 0;}

	@media screen and (max-width:769px) {
		.col-5{flex-wrap:wrap;}
		.col-5 li{width: calc(48% - 2%); margin: 3% 2% !important;}
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