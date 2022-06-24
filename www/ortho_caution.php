<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg ortho-bg">
	<p>BARUN PLANT DENTAL CLINIC</p>
	<h2>치아교정 주의사항</h2>
</div>
<?php
	include_once(G5_PATH.'/ortho_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('치아교정 주의사항');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>BARUN PLANT DENTAL CLINIC</p>
			<h3>치아교정 주의사항</h3>
		</div>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_caution_01.jpg" alt=""></li>
			<li class="num" data-num="01">
				<h5>구강위생상태를 항상 깨끗하게!</h5>
				<p>와이어 등으로 인하여 음식물이 잘 끼기 쉽고 
				제거가 용이하지 않습니다.
				따라서 세심한 잇솔질로 구강청결관리를 해야 합니다.
				잇솔질은 물론 가글액 등을 사용하는 것이 도움이 됩니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_caution_02.jpg" alt=""></li>
			<li class="num" data-num="02">
				<h5>딱딱하거나 질긴 음식 피하기</h5>
				<p>딱딱하거나 질긴 음식들은 치료 기간 중 
				치아 이동에 방해와 치아 손상의 원인이 될 수 있습니다.
				또한 부착한 장치가 탈락될 수 있기 때문의 주의가 필요합니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_caution_03.jpg" alt=""></li>
			<li class="num" data-num="03">
				<h5>문제 발생 시 바로 연락하기</h5>
				<p>장치가 탈락되었거나 와이어에 
				입안이 찔린 경우는 참거나 기다리지 마시고
				전화 후 내원해 주시면 빠르게 해결해 드리겠습니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_caution_04.jpg" alt=""></li>
			<li class="num" data-num="04">
				<h5>교정 진료 약속 지키기</h5>
				<p>효율적인 진료와 치아 관리를 위해서는 
				진료 날짜 및 시간을 꼭 지켜주세요.
				부득이하게 지킬 수 없을 경우에는 미리 연락해 주시기 바랍니다.</p>
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>