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
		<li class="selected"><a href="<?php echo G5_URL ?>/wisdom.php" target="_self">사랑니 발치</a></li>
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
			$('.sub-menu02').prev().html('사랑니 발치');
		});
	</script>
</ul>
<section class="content special-title pb2 wisdom-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>사랑니 발치</span></h3>
			<span class="slash"></span>
			<h4 >3D CT 등의 정밀 검사를 통해 체계적인 진단 후<br>
			고난도 사랑니까지 발치합니다.</h4>
		</div>
	</div>
</section>

<section class="content pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/wisdom_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5><span class="point-color">사랑니 발치</span>의 필요성</h5>
				<p>사랑니는 똑바로 나는 경우도 있지만
				비스듬하거나 수평으로 나기도하고
				치아 전체가 매몰된 채로 있기도 합니다.
				제대로 나지 않은 사랑니는 치열을 뒤틀리게 하고,
				칫솔질이 쉽지 않아 주변 어금니를 썩게 만들기 때문에 발치하는 것이 좋습니다.</p>
			</li>
		</ul>
	</div>
</section>

<!-- <section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>사랑니 발치 케이스</h4>
		</div>
		<ul class="col-2 line-list before-after pt3">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/wisdom_03.png" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/wisdom_03.png" alt="">
			</li>
		</ul>
	</div>
</section> -->

<section class="content">
	<div class="inner tac">
		<div class="middle-title">
			<h4>사랑니 발치 후 주의사항</h4>
		</div>
		<h6 class="fw300 b-paint">사랑니 치료 주의사항을 잘 인지하시고 <span class="fw700">환자분의 협조가 필요</span>합니다!</h6>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="num-list whitening">
			<p class="num" data-num="01">치아를 뽑은 후 목욕(샤워는 가능), 음주, 과격한 운동은 피해야 합니다.</p>
			<p class="num" data-num="02">손가락이나 혀로 뺀 자리는 만지지 않도록 합니다. 입에 문 솜을 2시간 정도 꽉 물고 있고 침과 피는 삼킵니다.</p>
			<p class="num" data-num="03">출혈이 멈추지 않거나 때때로 출혈이 있을 때는 청결한 거즈나 솜을 단단히 뭉쳐 깨끗한 물에 적셔 20~30분 정도 더 물고 있습니다.</p>
			<p class="num" data-num="04">퐁퐁 솟아나는 느낌의 출혈이 아니라 슬며시 배어 나오는 정도는 발치 후 하루 이틀 정도는 보통 있을 수 있습니다.</p>
			<p class="num" data-num="05">마취를 하였기 때문에 2~3시간 정도는 입술과 혀가 마비되어 있습니다.</p>
			<p class="num" data-num="06">발치 후 하루 정도는 부드러운 음식 위주로 이를 뺀 반대편으로 식사합니다. 지나치게 거칠거나 자극적은 음식은 피하도록 합니다.</p>
			<p class="num" data-num="07">하루 정도는 가능한 안정을 취해 충분히 쉬도록 하고 1~2일은 냉찜질을 해 줍니다.</p>
			<p class="num" data-num="08">이후에 붓기가 점차 심해지는 경우엔 병원을 다시 찾아 소독치료 및 약물치료를 받도록 하고 온찜질을 시작합니다.</p>
		</div>
	</div>
</section>



<style>
	.line-list li img{border: none;}
	.b-paint{position: relative;}
	.b-paint:before{content: ''; background: url(theme/hy/img/sub/wisdom_05.png) center no-repeat; position: absolute; bottom: -20px; height: 50px; width: 100%; left: 50%; transform:translateX(-50%); z-index: -11;}

	@media screen and (max-width:769px) {
		.b-paint:before{width: 0;}
	}
	
	@media screen and (max-width: 425px){
		.num-list .num {height: 55px ; font-size: 12px;}
	}	
</style>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>