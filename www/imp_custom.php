<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg imp-bg">
	<p>HAON DENTAL CLINIC</p>
	<h2><span>HAON : </span>임플란트</h2>
	<hr>
</div>
<div class="nav-menu pc-nav">
	<ul>
		<li><a href="<?php echo G5_URL ?>/imp_special.php" target="_self">임플란트의 특별함</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/imp_custom.php" target="_self">맞춤 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_all.php" target="_self">전악 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_oneday.php" target="_self">발치즉시 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_highlevel.php" target="_self">뼈이식 임플란트</a></li>
		<li><a href="<?php echo G5_URL ?>/imp_osstem.php" target="_self">오스템 임플란트</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/implant_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('맞춤 임플란트');
		});
	</script>
</ul>

<section class="content special-title pb2 imp-custom-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>맞춤 임플란트</span></h3>
			<span class="slash"></span>
			<h4 >개인 별 맞춤 임플란트는<br>
			내 치아처럼 편안합니다.</h4>
		</div>
	</div>
</section>

<section class="content">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5>임플란트 재수술의 큰 원인?
				이유는 <span class="point-color">임플란트 주위염</span>에 있다.</h5>
				<p>기성 지대주는 잇몸에 딱 맞지 않고 들뜬 공간에 음식물이 낍니다.
				맞춤 임플란트는 맞춤형 지대주를 사용하여 들뜨지 않고
				음식물이 낄 확률이 80% 감소합니다.

				하온치과는 맞춤 어버트먼트를 사용하여 임플란트의 수명이 늘어납니다.

				</p>
				<h6 class="point-color">임플란트를 편안하고 오래쓰고 싶다면
				커스텀 어버트먼트는 선택 아닌 필수입니다.</h6>
			</li>
		</ul>
	</div>
</section>

<section class="content photo-table pt5">
	<div class="inner tac">
		<div class="middle-title">
			<h4>하온치과에서 제안하는 맞춤 임플란트</h4>
		</div>
		<h6 class="imp-custom-title" data-num="01">맞춤 어버트먼트</h6>
		<table>
			<colgroup>
				<col width="12%">
				<col width="44%">
				<col width="44%">
			</colgroup>
			<thead>
				<tr>
					<td></td>
					<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_01.jpg" alt=""></td>
					<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_01_1.jpg" alt=""></td>
				</tr>
				<tr>
					<td></td>
					<td>일반어버트먼트</td>
					<td class="point-color" style="background-color: #c8ecff;">맞춤어버트먼트</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>구분</td>
					<td>대량 생산된 기성제품</td>
					<td>환자 개개인의 잇몸과
					<b class="point-color">치아 형태에 맞게 맞춤 제작</b></td>
				</tr>
				<tr>
					<td>비교</td>
					<td>ㆍ <b>이물질</b>이 끼일 가능성이 <b>높음</b>

					ㆍ 보철물 획일적으로 제작
					<b>보철물의 파절 가능성이 높음</b></td>
					<td>ㆍ 잇몸 높이에 맞게 제작되어
					<b class="point-color">이물질이 끼일 가능성이 낮음</b>

					ㆍ 보철물의 두께, 모양 고려하여 제작
					<b class="point-color">보철물의 파절 가능성이 낮음</b></td>
				</tr>
				
			</tbody>
		</table>
		
	</div>
</section>

<section class="content">
	<div class="inner tac">
		<h6 class="imp-custom-title" data-num="02">지르코니아 크라운</h6>
		<ul class="col-2 line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_03.png" alt="">
				<div class="mt3"><img src="<? echo G5_THEME_IMG_URL; ?>/sub/x.png" alt="" class="ox"></div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_04.png" alt="">
				<div class="mt3"><img src="<? echo G5_THEME_IMG_URL; ?>/sub/o.png" alt="" class="ox"></div>
			</li>
		</ul>
	</div>

	<div class="tac bg-gray mt5" style="border-radius: 20px; max-width: 1200px; margin: 0 auto;">
		<div class="middle-title mb0">
			<h4 class="point-color">하온치과는 지르코니아 크라운을 사용합니다.</h4>
			<p style="line-height: 1.8em;">지르코니아는 보철계의 다이아몬드로 불리며
			강도, 심미성 모두 우수한 프리미엄 보철물입니다.
			겉과 속 모두 세라믹 재질로 되어 잇몸 경계부분이 검게 변색되지 않습니다.
			특히, 자연치아와 유사한 빛 투과성으로 정밀합니다.</p>
		</div>
	</div>
</section>

<section class="content photo-table">
	<div class="inner tac">
		<h6 class="imp-custom-title" data-num="03">SCRP 신재생 임플란트</h6>
		<table>
			<colgroup>
				<col width="12%">
				<col width="22%">
				<col width="22%">
				<col width="44%">
			</colgroup>
			<thead>
				<tr>
					<td></td>
					<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_05.jpg" alt=""></td>
					<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_06.jpg" alt=""></td>
					<td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_07.jpg" alt="" style="width:100%;"></td>
				</tr>
				<tr>
					<td></td>
					<td>시멘트 타입</td>
					<td>스크류 타입</td>
					<td class="point-color" style="background-color: #c8ecff;">SCRP 신재생 임플란트</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>시술과정</td>
					<td>간단함</td>
					<td>복잡함</td>	
					<td><b class="point-color">중간</b></td>
				</tr>
				<tr>
					<td>사후관리</td>
					<td>불편함</td>
					<td>편함</td>
					<td><b class="point-color">시멘트 타입보다 훨씬 편하며,
					스크류타입 보다는 조금 불편함
					스크류타입에 더 가까움</b></td>
				</tr>
				<tr>
					<td>비교</td>
					<td>염증, 충치 발생 시
					처리가 어려움</td>
					<td>시술과정 복잡,
					나사풀림 현상
					있을 수 있음</td>
					<td><b class="point-color">스크류타입에 더욱 가까우며
					사후관리 용이함</b></td>
				</tr>
			</tbody>
		</table>
	</div>
</section>

<!-- <section class="content">
	<div class="side-title">
		<div>
			<h6><b>결과</b>로 보여드리는 <b>실력</b></h4>
		</div>
		<hr>
	</div>
	<div class="inner">
		<ul class="col-2 before-after line-list">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_08.jpg" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_08.jpg" alt="">
			</li>
			<div class="before-after-txt">
				<h5>맞춤 임플란트</h5>
				<p>치료 설명 2~3줄 삽입 (요청)</p>
			</div>
		</ul>

		<ul class="col-2 before-after line-list mt5">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_08.jpg" alt="">
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_08.jpg" alt="">
			</li>
			<div class="before-after-txt">
				<h5>고난도 임플란트</h5>
				<p>치료 설명 2~3줄 삽입 (요청)</p>
			</div>
		</ul>
	</div>
</section> -->

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<style>
	.line-list li img{border: none;}
	.ox{width: auto !important;}
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>