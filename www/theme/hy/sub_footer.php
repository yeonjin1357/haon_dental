<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
<section class="content pt5">
	<div class="inner" style="max-width: 1400px;">
		<div class="tac">
			<h4 class="mb3"><span class="fw300">수 많은 치과들 속에서도</span><br>
			하온치과가 돋보이는 이유</h4>
		</div>
		<ul class="imp-tab">
			<li class="selected">분야별 협진 시스템</li>
			<li>함께하는 의료진</li>
			<li>믿음케어 수술실</li>
			<li>12단계 멸균시스템</li>
			<li>편안한 치과치료</li>
		</ul>
		<div class="imp-tab1 imp-tab-div">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_tab_01.jpg" alt="">
				<div class="imp-tab-txt">
					<h5>치료계획으로 승부하는
					분야 별 의료진 협진 시스템</h5>
					<p>풍부한 임상경험을 지닌 의료진 협진시스템!
					분야별 의료진이 통합적인 시각으로 치료계획을 수립합니다.

					더 높은 진료의 퀄리티를 위해
					하온치과는 노력하고 노력합니다.</p>
				</div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_tab_02.jpg" alt="">
			</li>
		</div>

		<ul class="imp-tab2 imp-tab-div">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_tab_03.jpg" alt="">
				<div class="imp-tab-txt">
					<h5>당신의 치료 끝까지
					함께 동행하겠습니다.</h5>
					<p>긴 호흡이 필요한 치아교정, 임플란트
					치료 중간에 의료진이 바뀐다면 당연히 걱정됩니다.

					하온치과는 전담주치의 제도를 통해
					상담부터 치료, 후 관리까지 전담의료진이 함께합니다.</p>
				</div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_tab_04.jpg" alt="">
			</li>
		</ul>

		<ul class="imp-tab3 imp-tab-div">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_tab_05.jpg" alt="">
				<div class="imp-tab-txt">
					<h5>안전하고 투명한 진료환경을 위해
					믿음케어 수술실 운영</h5>
					<p>안심하고 치료받으세요!
					안심 진료의 시작, 믿음케어 수술실을 준비했습니다.

					환자를 생각하는 마음에서부터
					투명한 진료를 선도하는 치과로 앞장서겠습니다.</p>
				</div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_tab_06.jpg" alt="">
			</li>
		</ul>

		<ul class="imp-tab4 imp-tab-div">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_tab_07.jpg" alt="">
				<div class="imp-tab-txt">
					<h5>교차감염 걱정 ZERO!
					12단계 멸균으로 철저한 관리!</h5>
					<p>걱정 없는 깔끔한 치료를 위해
					하온치과는 단계 별 멸균시스템을 운영합니다.

					1인 1기구 사용 원칙, 고압 멸균기,  소독기 등으로
					2차 감염예방을 위한 소독시스템을 구축하여
					믿고 안심할 수 있는 진료가 가능합니다.</p>
				</div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_tab_08.jpg" alt="">
			</li>
		</ul>

		<ul class="imp-tab5 imp-tab-div">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_tab_09.jpg" alt="">
				<div class="imp-tab-txt">
					<h5>편안한 진료는
					우선 아프지 않아야합니다.</h5>
					<p>편안한 진료의 첫번째 조건은 아프지 않아야합니다.
					그래서 하온치과는 단계 별 무통시스템을 준비했습니다.

					가글마취, 도포마취, 마취액 천천히 주입하는 과정을 거친
					단계별 무통 시스템으로 치료는 물론,
					마취까지도 아프지 않도록 도와드립니다.</p>
				</div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_tab_10.jpg" alt="">
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<ul class="kakao-naver">
		<li>
			<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_special_13.jpg">
			<a href="http://pf.kakao.com/_IxoRPb" target="_blank">
				<span>간편상담
				바로가기</span>
			</a>
		</li>
		<li>
			<img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_special_14.jpg">
			<a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')" target="_self">
				<span>간편예약
				바로가기</span>
			</a>
		</li>
	</ul>
</section>

<script>
	$(function(){
		
		$('.imp-tab2, .imp-tab3, .imp-tab4, .imp-tab5').css({'display' : 'none'})

		$('.imp-tab li').click(function(){
			$('.imp-tab li').removeClass('selected');
			$(this).addClass('selected');
			
		});

		$('.imp-tab li:first-child').click(function(){
			$('.imp-tab-div').css({'display' : 'none'});
			$('.imp-tab1').css({'display' : 'flex'});
		});

		$('.imp-tab li:nth-child(2)').click(function(){
			$('.imp-tab-div').css({'display' : 'none'});
			$('.imp-tab2').css({'display' : 'flex'});
		});

		$('.imp-tab li:nth-child(3)').click(function(){
			$('.imp-tab-div').css({'display' : 'none'});
			$('.imp-tab3').css({'display' : 'flex'});
		});

		$('.imp-tab li:nth-child(4)').click(function(){
			$('.imp-tab-div').css({'display' : 'none'});
			$('.imp-tab4').css({'display' : 'flex'});
		});

		$('.imp-tab li:nth-child(5)').click(function(){
			$('.imp-tab-div').css({'display' : 'none'});
			$('.imp-tab5').css({'display' : 'flex'});
		});

	});
</script>

<style>
li{list-style: none;}
footer{margin-top: 0 !important;}
</style>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>