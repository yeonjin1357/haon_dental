<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg denture-bg">
	<p>MISOJIN DENTAL CLINIC</p>
	<h2>틀니</h2>
</div>
<?php
	include_once(G5_PATH.'/basic_nav.php');
?>
<script>
	$(document).ready(function(){
		$('.sub-menu02').prev().html('틀니');
	});
</script>
<section class="content photo-table">
	<div class="inner">
		<div class="title">
			<p>MISOJIN DENTAL CLINIC</p>
			<h3>틀니의 종류</h3>
		</div>
		<table>
			<colgroup>
				<col width="12%">
				<col width="44%">
				<col width="44%">
			</colgroup>
			<thead>
				<tr>
					<td></td>
					<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/denture_01.jpg" alt=""></td>
					<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/denture_02.jpg" alt=""></td>
				</tr>
				<tr>
					<td></td>
					<td>전체 틀니</td>
					<td>부분 틀니</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>특징</td>
					<td>무치악의 경우 밋몸을 이용하여 지탱,
					잇몸뼈가 적어도 착용 가능</td>
					<td>몇 개의 치아가 남아 있어
					상실된 치아를 보충해 주는 역할</td>
				</tr>
				<tr>
					<td>제작</td>
					<td>잇몸을 이용하여 지탱이 되므로
					고정력이 상대적으로 약함</td>
					<td>갈고리 형태를 이용하여 남아 있는 
					치아에 틀니를 고정시킬 수 있어
					전체 틀니에 비해 고정력이 강함</td>
				</tr>
				<tr>
					<td>고정</td>
					<td>잇몸에 맞게 맞춤 제작되어
					헐겁지 않고 통증이 적음</td>
					<td>남아 있는 치아에서 틀니를
					잘 고정시킬 수 있도록 제작</td>
				</tr>
				<tr>
					<td>적용 대상</td>
					<td>치아가 하나도 남아있지 않은 구강</td>
					<td>일부 자연치아가 남아 있는 구강</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>
<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>보험 틀니</h4>
			<p>국민건강보험공단에서 지원하는 보험으로 건강보험에 가입하신 
			만65세 이상 어르신들이 부담없이 틀니를 하실 수 있도록 
			보험 혜택이 적용된 틀니 치료입니다.</p>
		</div>	
		<div class="insurance-box">
			<ul class="info mt0">
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
	</div>
</section>
<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>