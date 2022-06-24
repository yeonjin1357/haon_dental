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
		<li><a href="<?php echo G5_URL ?>/imp_special.php" target="_self">임플란트의 특별함</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_custom.php" target="_self">맞춤 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_all.php" target="_self">전악 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_oneday.php" target="_self">발치즉시 임플란트</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/imp_highlevel.php" target="_self">뼈이식 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_osstem.php" target="_self">오스템 임플란트</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/implant_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('뼈이식 임플란트');
		});
	</script>
</ul>
<section class="content special-title pb2 imp-highlevel-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>뼈이식 임플란트</span></h3>
			<span class="slash"></span>
			<h4 >잇몸뼈가 충분하지 않으면<br>
			임플란트 시술이 어렵습니다.</h4>
		</div>
	</div>
</section>

<section class="content">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_highlevel_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5>잇몸이 약해서 임플란트가 어려울 때,
				<span class="point-color">임플란트의 성공률을 높여</span>드립니다.</h5>
				<p>잇몸뼈는 소실되고나면 스스로 회복하지 않기 때문에
				충분한 양을 확보하거나 건강한 잇몸뼈로
				되돌리기 위한 뼈이식이 필요합니다.

				부족한 잇몸뼈를 채우기 위해 뼈이식을
				동반한 시술이 뼈이식 임플란트입니다.</p>
			</li>
		</ul>
		
	</div>
</section>

<section class="content">
	<div class="inner tac pt3">
		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_highlevel_03.png" alt="">
	</div>
</section>

<section class="content imp-bg5 bg-gray op-circle">
	<div class="inner tac">
		<span>HAON DENTAL CLINIC</span>
		<h5><b class="fw500">뼈이식 임플란트</b> 치료효과</h5>
		<ul class="col-4">
			<li class="circle-box">
				<p>생착률 높은
				잇몸뼈 이식</p>
			</li>
			<li class="circle-box">
				<p>일상 생활 속
				높은 만족도</p>
			</li>
			<li class="circle-box">
				<p>잇몸 뼈는 물론
				잇몸라인도 복원</p>
			</li>
			<li class="circle-box">
				<p>빠른 일상
				복귀</p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>뼈이식 시술과정</h4>
		</div>
		<ul class="col-3 line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_highlevel_04.png" alt="">
				<h5>STEP 01
				<span class="point-color">진단</span></h5>
				<p>잇몸뼈 손실로 인해<br>
				뼈의 양이 부족</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_highlevel_04_1.png" alt="">
				<h5>STEP 02
				<span class="point-color">뼈 이식</span></h5>
				<p>자가뼈 일부를 떼어 붙이거나,<br>
				인공 뼈를 이식</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_highlevel_04_2.png" alt="">
				<h5>STEP 03
				<span class="point-color">뼈 형성</span></h5>
				<p>시간 경과 후 뼈 형성 확인,<br>
				임플란트 식립</p>
			</li>
		</ul>
	</div>
</section>

<!-- <section class="content">
	<div class="side-title">
		<div>
			<h6><b>결과</b>로 보여드리는 <b>실력</b></h4>
		</div>
		<hr>
	</div>
	<div class="inner">
		<ul class="col-2 before-after line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_08.jpg" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_08.jpg" alt="">
			</li>
			<div class="before-after-txt">
				<h5>상악동 거상술</h5>
				<p>치료 설명 2~3줄 삽입 (요청)</p>
			</div>
		</ul>

		<ul class="col-2 before-after line-list mt5">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_08.jpg" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_08.jpg" alt="">
			</li>
			<div class="before-after-txt">
				<h5>뼈이식 임플란트</h5>
				<p>치료 설명 2~3줄 삽입 (요청)</p>
			</div>
		</ul>
	</div>
</section> -->

<style>
	.line-list li img{border: none;}
</style>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>