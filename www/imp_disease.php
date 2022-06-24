<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg implant-bg">
	<p>MISOJIN DENTAL CLINIC</p>
	<h2>전신질환 임플란트</h2>
</div>
<?php
	include_once(G5_PATH.'/implant_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('전신질환 임플란트');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>MISOJIN DENTAL CLINIC</p>
			<h3>전신질환 임플란트</h3>
			<p class="title-text">일반 환자들에 비해 감염, 출혈 등의 문제가 발생할 가능성이 큰
			전신질환 환자들을 대상으로 이루어지는 임플란트 치료방법입니다.<br>

			당뇨, 고혈압, 골다공증 등의 질환을 앓고 계신 분들이 
			임플란트 치료를 받았을 때 발생할 수 있는 다양한 부작용들로 인해<br>
			그동안 받지 못했던 치과 치료를 일반인들과 다름없이 
			치료받으실 수 있도록 질환에 따른 맞춤 치료를 진행하는 방법입니다.</p>	
		</div>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_disease_01.jpg" alt=""></li>
			<li>
				<h5 class="point-color">고혈압</h5>
				<p>최고혈압 140-179mmHg, 최저혈압 90-190mmHg 까지는
				임플란트 수술이 가능합니다.
				최고혈압 180mmHg 이상, 최저혈압 110mmmHg 이상 일 경우
				내과 의사 진단과 치료를 받은 후 수술이 가능합니다.
				복용하는 약 중 피를 묽게 하는 아스피린, 헤파린, 쿠마린, 와파린 등
				항응고제 계열의 약은 시술 5일 전부터 복용을 중단해야 하며
				수술 전 충분한 상담을 통해 복용 방법을 조절해야 합니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_disease_02.jpg" alt=""></li>
			<li>
				<h5 class="point-color">당뇨</h5>
				<p>건강한 사람의 혈당 수치는 공복 전 100mg/dl 미만이지만
				당뇨환자는 공복 시 126mg/dl 이상이고, 식사 2시간 후
				200mg/dl 정도가 됩니다.

				약물 등으로 혈당조절이 가능하고 심한 합병증을 
				동반한 경우가 아니라면
				임플란트 수술이 가능합니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_disease_03.jpg" alt=""></li>
			<li>
				<h5 class="point-color">골다공증</h5>
				<p>비스포스포네이트 계열의 약을 복용하고 계시다면 
				임플란트 수술 전 꼭 상담을 진행해 주셔야 합니다.
				골다공증 환자의 경우 임플란트를 지지할 수 있는 
				잇몸 뼈의 골밀도가 낮은 경우가 있기 때문에 
				인조골을 이용해 보충한 뒤 임플란트 수술을 진행합니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_disease_04.jpg" alt=""></li>
			<li>
				<h5 class="point-color">심장질환</h5>
				<p>심근경색 수술을 받았을 경우 6개월 정도가 지나야 임플란트 수술이 가능합니다.
				심근경색 수술 후 임플란트 수술을 진행하게 된다면 시술 1시간 이전에는
				항생제 복용을 반드시 해주셔야 하며 항응고제 계열의 약 복용 시
				경우에 따라 시술 5일 전에는 복용을 중단해 주셔야 합니다.</p>
			</li>
		</ul>
	</div>
</section>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>