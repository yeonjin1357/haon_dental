<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg ortho-bg">
	<p>BARUN PLANT DENTAL CLINIC</p>
	<h2>치아교정 유지관리</h2>
</div>
<?php
	include_once(G5_PATH.'/ortho_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('치아교정 유지관리');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>BARUN PLANT DENTAL CLINIC</p>
			<h3>치아교정 유지관리</h3>
		</div>
		<ul class="col-4 retainer">
			<li>
				<h5 class="point-color">01</h5>
				<h5>치아 위생 교육</h5>
			</li>
			<li>
				<h5 class="point-color">02</h5>
				<h5>정기 구강 검진</h5>
			</li>
			<li>
				<h5 class="point-color">03</h5>
				<h5>치아 회귀 예방</h5>
			</li>
			<li>
				<h5 class="point-color">04</h5>
				<h5>재교정 방지</h5>
			</li>
		</ul>
	</div>
</section>
<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>클리피씨교정 장점</h4>
			<p>치아를 고르게 배열시켰다고 끝이 아닙니다. 
			치아와 얼굴 전체의 밸런스를 맞춰 치아교정 후 생길 수 있는 
			부작용까지 예방할 수 있도록 치아교정 후 관리까지 집중하고 있습니다.</p>
		</div>
		<ul class="col-3 circle-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_retainer_01.jpg" alt="">
				<h5>치아 중앙성</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_retainer_02.jpg" alt="">
				<h5>치아 각도</h5>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_retainer_03.jpg" alt="">
				<h5>잇몸과 치아 길이</h5>
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>