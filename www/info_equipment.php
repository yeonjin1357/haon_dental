<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg info-equipment-bg">
	<p>MISOJIN DENTAL CLINIC</p>
	<h2>장비 소개</h2>
</div>
<?php
	include_once(G5_PATH.'/about_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('장비 소개');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>MISOJIN DENTAL CLINIC</p>
			<h3>장비 소개</h3>
		</div>
		<ul class="col-5 line-list">
			<li class="num" data-num="01">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_01.jpg" alt="">
				<h5>3D CT</h5>
				<p>eco-x</p>
			</li>
			<li class="num" data-num="02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_02.jpg" alt="">
				<h5>3D CT</h5>
				<p>바테 Smart Plus CT</p>
			</li>
			<li class="num" data-num="03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_03.jpg" alt="">
				<h5>무통마취기</h5>
				<p>노페인3</p>
			</li>
			<li class="num" data-num="04">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_04.jpg" alt="">
				<h5>마취크림</h5>
				<p>엠라크림</p>
			</li>
			<li class="num" data-num="05">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_05.jpg" alt="">
				<h5>핸드피스형 레이저</h5>
				<p>k2</p>
			</li>
			<li class="num" data-num="06">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_06.jpg" alt="">
				<h5>불소</h5>
				<p>NT 클리어바니쉬클린</p>
			</li>
			<li class="num" data-num="07">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_07.jpg" alt="">
				<h5>플라즈마 멸균기</h5>
				<p>EXPlasma Z7</p>
			</li>
			<li class="num" data-num="08">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_08.jpg" alt="">
				<h5>턱관절 물리 치료 레이저</h5>
				<p>Perfect healing laser</p>
			</li>
			<li class="num" data-num="09">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_equipment_09.jpg" alt="">
				<h5>집진기</h5>
				<p>komax silence a100</p>
			</li>
		</ul>
	</div>
</section>

<style>
	.line-list li img{border: none;}
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>