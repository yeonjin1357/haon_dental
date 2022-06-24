<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg special-bg">
	<p>HAON DENTAL CLINIC</p>
	<h2>특별함<span>을 만나보세요!</span></h2>
	<hr>
</div>
<div class="nav-menu pc-nav">
	<ul>
		<li><a href="<?php echo G5_URL ?>/special01.php" target="_self">안심케어 수술실</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/special02.php" target="_self">감염 관리 시스템</a></li>
		<li><a href="<?php echo G5_URL ?>/special03.php" target="_self">믿음 더한 보증 시스템</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/special_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('감염 관리 시스템');
		});
	</script>
</ul>

<section class="content special02-bg pb2 special-title">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>감염 관리 시스템</span></h3>
			<span class="slash"></span>
			<h4 >철저한 방역수칙 준수<br>
			딱! 필요한 곳만 치료하는 하온치과</h4>
		</div>
		
	</div>
</section>

<section class="content bg-gray">
	<div class="inner tac">
		<div class="middle-title">
			<h4>청결을 더해 줄 멸균장비</h4>
		</div>
		<ul class="col-3">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_02.png" alt="">
				<h5>플라즈마 멸균소독기</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_03.png" alt="">
				<h5>오토클레이브 멸균기</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_01.png" alt="">
				<h5>핸드피스 멸균기</h5>
			</li>
		</ul>	
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>1인 1기구 멸균 시스템</h4>
		</div>
		<ul class="col-5 line-list">
			<li class="num2" data-num="STEP
			01">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_04.jpg" alt="">
				<h5>소독준비</h5>
			</li>
			<li class="num2" data-num="STEP
			02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_05.jpg" alt="">
				<h5>1회용품 폐기</h5>
			</li>
			<li class="num2" data-num="STEP
			03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_06.jpg" alt="">
				<h5>용액 소독</h5>
			</li>
			<li class="num2" data-num="STEP
			04">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_07.jpg" alt="">
				<h5>1차 세척</h5>
			</li>
			<li class="num2" data-num="STEP
			05">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_08.jpg" alt="">
				<h5>초음파 세척</h5>
			</li>
			<li class="num2" data-num="STEP
			06">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_09.jpg" alt="">
				<h5>2차 세척</h5>
			</li>
			<li class="num2" data-num="STEP
			07">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_10.jpg" alt="">
				<h5>3차 세척 및 건조</h5>
			</li>
			<li class="num2" data-num="STEP
			08">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_11.jpg" alt="">
				<h5>1차 고압증기 멸균</h5>
			</li>
			<li class="num2" data-num="STEP
			09">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_12.jpg" alt="">
				<h5>2차 고압증기 멸균</h5>
			</li>
			<li class="num2" data-num="STEP
			10">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_13.jpg" alt="">
				<h5>핸드피스 소독</h5>
			</li>
			<li class="num2" data-num="STEP
			11">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_14.jpg" alt="">
				<h5>개별 패킹 밀봉</h5>
			</li>
			<li class="num2" data-num="STEP
			12">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_15.jpg" alt="">
				<h5>자외선 소독기 보관</h5>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner tac">
		<h4 class="mb3 fw300">❝ 멸균장비는 <b>식약청에서 공식적으로 멸균효과를 인정받은 제품</b>만 사용합니다. ❞</h4>
		<ul class="col-2 line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_16.jpg" alt="">
				<h5>타구대 및 체어소독</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/special02_17.jpg" alt="">
				<h5>의료 폐기물 관리</h5>
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>