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
		<li class="selected"><a href="<?php echo G5_URL ?>/about.php" target="_self">정직한 진료 원칙</a></li>
		<li><a href="<?php echo G5_URL ?>/info_dentist.php" target="_self">경험이 다른 의료진</a></li>
		<li><a href="<?php echo G5_URL ?>/info_interior.php" target="_self">둘러보기</a></li>
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
			$('.sub-menu02').prev().html('정직한 진료 원칙');
		});
	</script>
</ul>
<section class="content">
	<div class="inner" style="max-width: 1400px;">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>정직한</span> 진료 원칙</h3>
		</div>
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_01.jpg" alt="">
	</div>
</section>

<section class="content">
	<div class="inner tac">
		<h3 style="font-weight: bold;" class="mb3 mmb7 nsk">안녕하세요. 하온치과 허용호 대표원장입니다.</h4>
		<div class="middle-title">
			<p>병원으로 들어서는 첫걸음은 떨렸지만 치료 후 돌아가는 발걸음은 행복할 수 있도록
			모두에게 편안한 안심되는 공간을 만들고 싶었습니다.
			그 생각 끝에 하온치과를 개원했습니다.

			환자분 한분 한분 제 가족이라는 마음가짐으로 정확하고 정직한 치료를 도와드리겠습니다.</p>
		</div>
		<ul class="col-2 about-sign mpt7">
			<li>
				<h6>하온치과 대표원장</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/about_02.jpg" alt="">
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>