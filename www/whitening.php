<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg basic-bg">
	<p>MISOJIN DENTAL CLINIC</p>
	<h2>일반진료</h2>
</div>
<?php
	include_once(G5_PATH.'/basic_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('치아미백');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>MISOJIN DENTAL CLINIC</p>
			<h3>치아미백</h3>
			<p class="title-text">치아에 손상을 주지 않고 치아를 밝게 하는 술식으로
			치아를 원래 색으로 회복시키거나 하얗게 치료하는 치료법입니다.</p>	
		</div>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/whitening_01.jpg" alt="">
			</li>
			<li>
				<h5 class="point-color">치아 변색의 외부요인</h5>
				<p>커피, 담배, 콜라 등 색소가 함유된 음식물 섭취,
				흡연 등에 의해 치아 표면에 달라붙어 색이 변하거나
				치석이 많이 생겨서 착색된 경우</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/whitening_02.jpg" alt="">
			</li>
			<li>
				<h5 class="point-color">치아 변색의 내부요인</h5>
				<p>임신중인 산모가 태아의 치아 발생기간에 테트라사이클린 등의
                항생제를 복용하거나, 유아의 영구치 발생기간에 고열
                세균감염 등 치아 발생에 영향을 주어
                치아의 형성 단계부터 색이 변화한 경우</p>
			</li>
		</ul>
	</div>
</section>
<!-- <section class="content pb5">
	<div class="inner">
		<h4 class="middle-title">치아미백 시술 종류</h4>
		<ul class="col-2 line-box">
			<li>
				<h5 class="point-color">전문가 미백</h5>
				<p>치과에서 고농도의 미백제를 이용하여 <br />
				빠른 효과를 위해 약재와 함께 활성광원이
				이용됩니다.</p>
			</li>
			<li>
				<h5 class="point-color">자가 미백</h5>
				<p>병원에서 특수하게 제작된 미백틀과 
				미백제를 <br /> 집에서 사용하는 방법으로 
				낮에 2시간 사용하는 방법과 <br /> 
				잘 때 끼고 자는 방법이 있습니다. <br />
				치아의 착색 정도에 따라 2~4주 진행됩니다.</p>
			</li>
		</ul>	
	</div>
</section> -->
<section class="content pb5 pt5" style="background: #e7f5fe;">
	<div class="inner">
		<h4 class="middle-title">전문가 미백</h4>
		<div class="title">
			<p class="title-text">치과에서 고농도의 미백제를 이용하여 빠른 효과를 위해 약재와 함께 활성광원이 이용됩니다.</p>	
		</div>	
		<ul class="col-4 circle-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/whitening_03.jpg" alt="">
				<h5 class="point-color">STEP 01</h5>
				<p>검진 및 스케일링</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/whitening_04.jpg" alt="">
				<h5 class="point-color">STEP 02</h5>
				<p>잇몸 보호제 도포</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/whitening_05.jpg" alt="">
				<h5 class="point-color">STEP 03</h5>
				<p>치아미백 약제 도포</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/whitening_06.jpg" alt="">
				<h5 class="point-color">STEP 04</h5>
				<p>치아미백 광선조사</p>
			</li>
		</ul>
	</div>
</section>
<!--<section class="content">
	<div class="inner">
		<h4 class="middle-title">자가 미백</h4>
		<ul class="col-4 circle-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/whitening_07.jpg" alt="">
				<h5 class="point-color">STEP 01</h5>
				<p>치료 및 스케일링</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/whitening_08.jpg" alt="">
				<h5 class="point-color">STEP 02</h5>
				<p>치아트레이 제작</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/whitening_09.jpg" alt="">
				<h5 class="point-color">STEP 03</h5>
				<p>치아세척 후 트레이 착용</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/whitening_10.jpg" alt="">
				<h5 class="point-color">STEP 03</h5>
				<p>양치 및 가글</p>
			</li>
		</ul>
	</div>
</section>-->
<section class="content">
	<div class="inner">
		<h4 class="middle-title">치아미백 시술 후 주의사항</h4>
		<div class="num-list whitening">
			<p class="num" data-num="01">치아미백 시술 후 일시적으로 시린 증상이 생길 수 있습니다. 심한 경우 미백 치료 중간에 휴식기를 가질 수 있으며, 일반적으로 시간이 지나며 호전됩니다.</p>
			<p class="num" data-num="02">너무 뜨겁거나 차가운 음식은 피해주세요.</p>
			<p class="num" data-num="03">미백 효과가 나타나는 속도에 치아 부위마다 차이가 있어 일시적으로 백색 반점이 나타날 수 있습니다.</p>
			<p class="num" data-num="04">쉽게 착색되는 음식 및 흡연은 되도록 피하는 것이 미백 효과를 유지하는데 도움이 됩니다. </p>
			<p class="num" data-num="05">6개월마다 스케일링과 유지관리 미백을 받는 것이 밝고 깨끗한 치아를 유지하는데 도움이 됩니다.</p>
			<p class="num" data-num="06">치아 미백의 결과는 환자분마다 다를 수 있습니다. 이는 치아마다, 개개인마다 치아 구조가 물리적, 화학적으로 다르기 때문이며,<br>
			변색 원인에 따라서도 미백 효과가 다르게 나타납니다.</p>
		</div>
	</div>
</section>



<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>