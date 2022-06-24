<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg aesthetic-bg">
	<p>MISOJIN DENTAL CLINIC</p>
	<h2>심미보철</h2>
</div>
<?php
	include_once(G5_PATH.'/basic_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('심미보철');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>MISOJIN DENTAL CLINIC</p>
			<h3>심미보철</h3>
			<p class="title-text">보철치료는 치아가 손상되거나 상실되었을 때 
			인공 보철물로 대체함으로써 원래의 치아의 기능 즉, 저작기능 뿐 아니라 
			발음과 심미성까지 회복시켜주는 치료입니다.</p>	
		</div>

	</div>
</section>
<!-- <section class="content">
	<div class="inner">
		<h4 class="middle-title">혜윰치과 심미보철만의 특별함</h4>
		<ul class="col-4">
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/aesthetic_icon_01.png" alt="">
					<p>보철과 전문의 진료</p>
				</div>
			</li>
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/aesthetic_icon_02.png" alt="">
					<p>풍부한 노하우</p>
				</div>
			</li>
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/aesthetic_icon_03.png" alt="">
					<p>꼼꼼하고 섬세한 진료</p>
				</div>
			</li>
			<li class="circle-icon">
				<div>
					<img src="<? echo G5_THEME_IMG_URL; ?>/sub/aesthetic_icon_04.png" alt="">
					<p>1: 1 맞춤 디자인</p>
				</div>
			</li>
		</ul>
	</div>
</section> -->
<!-- ########################## 해당 섹션 필요시 주석 해제 ################################ -->
<section class="content">
	<div class="inner">
		<h4 class="middle-title">심미보철 재료</h4>
		<ul class="basic-box ae-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/aesthetic_01.jpg" alt="">
			</li>
			<li>
				<h5 class="point-color">라미네이트</h5>
				<div class="num-list">
					<p class="num" data-num="01">심미적으로 간단한 치아 형태 성형과 미백효과를 볼 수 있습니다.</p>
					<p class="num" data-num="02">모든 재료 중 가장 심미성이 우수합니다.</p>
					<p class="num" data-num="03">치아의 삭제량을 최소화시킵니다.</p>
					<p class="num" data-num="04">색과 모양이 자연치아와 같습니다.</p>
				</div>
			</li>
		</ul>
		<ul class="basic-box ae-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/aesthetic_02.jpg" alt="">
			</li>
			<li>
				<h5 class="point-color">올세라믹</h5>
				<div class="num-list">
					<p class="num" data-num="01">강도와 경도가 자연치아와 유사합니다.</p>
					<p class="num" data-num="02">치료 후 잇몸 변색이 적습니다.</p>
					<p class="num" data-num="03">보철물의 적합성이 뛰어나 치태 침착이 적습니다.</p>
					<p class="num" data-num="04">심미성이 우수합니다.</p>
				</div>
			</li>
		</ul>
		<ul class="basic-box ae-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/aesthetic_03.jpg" alt="">
			</li>
			<li>
				<h5 class="point-color">지르코니아</h5>
				<div class="num-list">
					<p class="num" data-num="01">강도가 매우 우수하여 어금니 보철치료와 임플란트에도 적합합니다.</p>
					<p class="num" data-num="02">자연치아와 색상이 거의 동일합니다.</p>
					<p class="num" data-num="03">열전도율이 낮습니다.</p>
					<p class="num" data-num="04">생체친화성이 우수합니다.</p>
				</div>
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>