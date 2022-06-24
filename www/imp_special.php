<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg imp-bg">
	<p>HAON DENTAL CLINIC</p>
	<h2><span>HAON : </span>임플란트</h2>
	<hr>
</div>
<div class="nav-menu pc-nav">
	<ul>
		<li class="selected"><a href="<?php echo G5_URL ?>/imp_special.php" target="_self">임플란트의 특별함</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_custom.php" target="_self">맞춤 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_all.php" target="_self">전악 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_oneday.php" target="_self">발치즉시 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_highlevel.php" target="_self">뼈이식 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_osstem.php" target="_self">오스템 임플란트</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/implant_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('임플란트의 특별함');
		});
	</script>
</ul>
<section class="content special-title pb2 imp-special-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>하온치과 임플란트의 특별함</span></h3>
			<span class="slash"></span>
			<h4 >임플란트하면 하온치과<br>
			하온치과하면 정직함입니다.</h4>
		</div>
		
	</div>
</section>

<section class="content imp-bg1 bg-gray">
	<div class="inner">
		<div class="middle-title" style="color: #fff;">
			<h4>하온치과 임플란트가 특별한 이유</h4>
			<p>대표원장이 직접 상담부터 수술까지!
			풍부한 임상경험으로 정확성 높은 진료를 보여드립니다.</p>
		</div>
		<ul class="col-3 sq-circle">
			<li data-aos="fade-up" data-aos-duration="2000">
				<span>01</span>
				<h5>풍부한 임상경험을
				가진 대표원장 진료</h5>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_special_02.png" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<span>02</span>
				<h5>100% 정품
				재료 사용</h5>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_special_02_1.png" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
				<span>03</span>
				<h5>고난도 임플란트 및
				재수술 가능</h5>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_special_02_2.png" alt="">
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<p>풍부한 임상경험을 지닌 대표원장과 선진의료장비의 조합</p>
			<h4>하온치과의 임플란트는 특별합니다!</h4>
		</div>
		<div data-aos="zoom-in" data-aos-duration="2000">
			<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_special_05.jpg" alt="">
		</div>
	</div>
</section>

<section class="content imp-bg2 op-circle bg-gray">
	<div class="inner tac">
		<span>HAON DENTAL CLINIC</span>
		<h5>임플란트 <b class="fw500">보증 관리 시스템</b></h5>
		<ul class="col-4">
			<li class="circle-box">
				<p>정품 인증서
				발급</p>
			</li>
			<li class="circle-box">
				<p>기간 별
				A/S 제도</p>
			</li>
			<li class="circle-box">
				<p>평생 주치의
				시스템</p>
			</li>
			<li class="circle-box">
				<p>정기적인
				리콜 서비스</p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_special_06.jpg" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_special_07.jpg" alt="" class="osstem">
				<h5>재료와 타협하지 않는 하온치과</h5>
				<p>안정성이 입증된 정품 임플란트만을 사용하여
				믿을 수 있는 치료를 진행합니다.
				세계적으로 입증된 오스템을 사용하여 튼튼한 제2의 치아를 완성하겠습니다.</p>
			</li>
		</ul>
	</div>
</section>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>