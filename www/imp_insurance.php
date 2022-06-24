<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg implant-bg">
	<p>MISOJIN DENTAL CLINIC</p>
	<h2>건강보험 임플란트</h2>
</div>
<?php
	include_once(G5_PATH.'/implant_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('건강보험 임플란트');
	});
</script>
<section class="content imp-insurance">
	<div class="inner">
		<div class="title">
			<p>MISOJIN DENTAL CLINIC</p>
			<h3>건강보험 임플란트</h3>
			<p class="title-text">국민건강보험공단에서 지원하는 보험으로 
			건강보험에 가입하신 만 65세 이상 어르신들이 <br />
			부담 없이 임플란트 식립을 하실 수 있도록 
			보험 혜택이 적용된 임플란트 치료입니다.</p>	
		</div>
		<h4 class="middle-title">임플란트 보험 적용 변경</h4>
		<div class="insurance-box">
			<ul class="point">
				<li>
					<p>기존본인부담금</p>
					<h1>50%</h1>
				</li>
				<li>
					<h1 class="point-color">></h1>
				</li>
				<li>
					<p>기존본인부담금</p>
					<h1 class="point-color">30%</h1>
				</li>
			</ul>
			<p>※ 건강보험 적용 범위가 확대되면서 기존 만 70세 이상 
			건강보험 가입자 또는<br /> 피부양자에서 
			[만 65세 이상]으로 적용 범위가 확대되었습니다.</p>
			<ul class="info">
				<li>
					<h6 class="point-color">대상</h6>
					<p><span class="point-color">만 65세 이상</span> 건강보험 가입자 또는 피부양자 중
					치아가 일부 없는 어르신 (부분 무치악)</p>
				</li>
				<li>
					<h6 class="point-color">적용</h6>
					<p>PFM 보철 수복 임플란트</p>
				</li>
				<li>
					<h6 class="point-color">범위</h6>
					<p>1인당 평생 2개</p>
				</li>
				<li>
					<h6 class="point-color">부담</h6>
					<p>건강보험 가입자 본인 부담률 50%
					▶ 2018년 7월부터 본인 <span class="point-color">부담률 30%</span></p>
				</li>
			</ul>
		</div>
		<p class="point-color">※ 건강보험 적용 문의 
		[ 국민건강보험공단 : 1577-1000 │ 미소진치과 031-294-2879 ]</p>
	</div>
</section>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>