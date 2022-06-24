<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg implant-bg">
	<p>MISOJIN DENTAL CLINIC</p>
	<h2>임플란트 주의사항</h2>
</div>
<?php
	include_once(G5_PATH.'/implant_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('임플란트 주의사항');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>MISOJIN DENTAL CLINIC</p>
			<h3>임플란트 주의사항</h3>
		</div>
		<ul class="col-3 line-box">
			<li class="num" data-num="01">
				<h5></h5>
				<p>너무 단단하거나 질긴 음식은 임플란트나 보철물을 손상시킬 수 있기 때문에 
				피해야 하며, 가능하다면 작게 잘라 섭취하시길 권장합니다.</p>
			</li>
			<li class="num" data-num="02">
				<h5></h5>
				<p>임플란트 보철은 치료 등의 목적으로 완전히 붙이지 않는 경우도 있으니
				간혹 빠지는 경우 놀라지 마시고 전화 후 내원을 통해 해결하시기 바랍니다.</p>
			</li>
			<li class="num" data-num="03">
				<h5></h5>
				<p>오랜 기간 사용하지 않았던 치아이기 때문에 임플란트 후 
				맞닿는 치아의 불편감을 느끼실 수 있으므로
				단단한 음식은 삼가시고 다음 내원 시 말씀해 주시기 바랍니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_caution_01.jpg" alt=""></li>
			<li>
				<h5 class="point-color">건강상태</h5>
				<p>1. 고혈압, 당뇨 등의 전신질환이나 기타 병력이 있는 분들은 반드시 전문의와 상담 후
				관련 검사를 시행하시고 수술에 문제가 없는지 확인해 주세요.

				2. 특정 약물에 알레르기가 있는 분은 반드시 상담을 하셔야 합니다.

				3. 복용하는 약이 있다면 시술 전 복용 및 중단 여부를 전문의와 상담하셔야 합니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_caution_02.jpg" alt=""></li>
			<li>
				<h5 class="point-color">수술 당일</h5>
				<p>1. 수술 전 감염 방지를 위해 수술 부위 주변을 소독하기 때문에 가능한 여성분들은
				진한 화장은 피해주시고 남성분들은 면도 후 내원하셔야 합니다.

				2. 가급적 자가운전은 피하시고 대중교통을 이용하시는 게 좋고 보호자와 함께
				동반하시는 것이 좋습니다.

				3. 수술 전 충분한 휴식과 수면을 취하고 수술 당일 편안한 복장으로 내원하시는 것이 좋습니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_caution_03.jpg" alt=""></li>
			<li>
				<h5 class="point-color">수술 후</h5>
				<p>1. 수술 당일부터 약 일주일 동안은 상처 부위 자극을 되도록 주지 않아 빠르게
				아물게 하기 위해 연한 음식(죽 등)을 드시는 것이 좋습니다.

				2. 보철 완성 후 1년 동안은 잇몸 뼈가 안정되는 시기이므로 질기고 딱딱한 음식물 섭취는
				피하는 것이 좋습니다.

				3. 빨대 사용은 수술 부위에 자극을 주어 벌어질 수 있기 때문에 아물기 전까지
				빨대는 사용하시면 안 됩니다.</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_caution_04.jpg" alt=""></li>
			<li>
				<h5 class="point-color">위생 상태</h5>
				<p>1. 치석 등으로 주위 잇몸에 염증이 생기면 보철물을 오래 사용할 수 없으므로
				위생 보조 기구 등을 사용하여 항상 깨끗하게 해 주셔야 합니다.

				2. 치간 칫솔 사용 시 출혈을 야기하여 염증이 발생할 수 있으므로 거울을 보고
				조심하여 사용해 주셔야 합니다.

				3. 주변 치아의 자연스러운 움직임에 의해 미세한 공간이 생겨 음식물이 낄 수 있지만
				이쑤시개는 사용하지 않으시는 게 좋습니다.</p>
			</li>
		</ul>
	</div>
</section>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>