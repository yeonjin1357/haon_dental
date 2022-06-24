<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg implant-bg">
	<p>MISOJIN DENTAL CLINIC</p>
	<h2>네비게이션 임플란트</h2>
</div>
<?php
	include_once(G5_PATH.'/implant_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('네비게이션 임플란트');
	});
</script>
<section class="content">
	<div class="inner">
		<div class="title">
			<p>MISOJIN DENTAL CLINIC</p>
			<h3>네비게이션 임플란트</h3>
			<p class="title-text">임플란트 수술 전 3D CT 촬영을 하고, 컴퓨터로 모의 시뮬레이션을 진행합니다. <br />
			그 결과를 토대로 임플란트 수술용 플라스틱 가이드를 제작하고 
			가이드를 환자 입속에 끼운 후 사전 계획된 수술을 진행합니다.</p>
		</div>
		<ul class="col-3 line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_navigation_01.jpg" alt="">
				<h5>CT를 이용한 3D <span class="point-color">진단</span></h5>
				<p>CT 촬영한 3차원 데이터와 구강 모형을 통해
				뼈, 잇몸, 신경을 통합적으로 고려하여
				정밀 진단합니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_navigation_02.jpg" alt="">
				<h5>컴퓨터로 수술 계획 <span class="point-color">수립</span></h5>
				<p>컴퓨터로 모의 수술을 통해 수술 위치를
				설정하고, 그대로 수술될 수 있도록
				맞춤형 원가이드를 제작합니다.</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_navigation_03.jpg" alt="">
				<h5>원가이드 장착 후 <span class="point-color">수술</span></h5>
				<p>제작된 원가이드를 수술 전 구강에 장착 후
				계획한 위치에 체계적인 수술로
				오차 범위를 줄입니다.</p>
			</li>
		</ul>
		<div class="navi">
			<h5>모의수술로 계획한 위치에 내 치아 같은 보철물로
			<span class="point-color">자연스럽게 임플란트 식립</span>이 가능합니다.</h5>
			<p>잇몸 절개 없이 임플란트가 들어갈 수 있는 정도의 작은 구멍을 내어 
			수술을 진행하며 통증이 적고 빠르게 회복할 수 있는 장점이 있습니다.</p>
		</div>
	</div>
</section>
<section class="content table-wrap">
	<div class="inner">
		<h4>네비게이션 임플란트 치료 기간</h4>
		<div class="table-scroll">
			<table>
				<colgroup>
					<col width="12.5%">
					<col width="12.5%">
					<col width="12.5%">
					<col width="12.5%">
					<col width="12.5%">
					<col width="12.5%">
					<col width="12.5%">
					<col width="12.5%">
				</colgroup>
				<thead>
					<tr>
						<td></td>
						<td>1회차</td>
						<td>2회차</td>
						<td>3회차</td>
						<td>4회차</td>
						<td>5회차</td>
						<td>6회차</td>
						<td>7회차</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>기존
						임플란트 
						절개시술</th>
						<td>상담 및 
						CT촬영</td>
						<td>1차 수술 및
						봉합</td>
						<td>실밥제거</td>
						<td>2차 수술</td>
						<td>치아 본뜨기</td>
						<td>치아 본뜨기</td>
						<td>최종 보철</td>
					</tr>
					<tr>
						<th class="table-point">네비게이션
						임플란트 시술</th>
						<td class="table-point">상담 및
						CT촬영
						디지털 스캔</td>
						<td class="table-point">네비게이션
						수술 및 임시
						보철 장착</td>
						<td class="table-point">최종 보철</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>