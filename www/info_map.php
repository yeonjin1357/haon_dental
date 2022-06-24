<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg about-bg">
	<p>HAON DENTAL CLINIC</p>
	<h2><span>하온치과</span> 소개</h2>
	<hr>
</div>
<div class="nav-menu pc-nav">
	<ul>
		<li><a href="<?php echo G5_URL ?>/about.php" target="_self">정직한 진료 원칙</a></li>
		<li><a href="<?php echo G5_URL ?>/info_dentist.php" target="_self">경험이 다른 의료진</a></li>
		<li><a href="<?php echo G5_URL ?>/info_interior.php" target="_self">둘러보기</a></li>
		<li><a href="<?php echo G5_URL ?>/info_time.php" target="_self">진료시간 및 예약안내</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/info_map.php" target="_self">찾아오시는 길</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/about_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('찾아오시는 길');
		});
	</script>
</ul>
<section class="content info-map">
	<div class="inner" style="max-width: 100%;">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>찾아오시는 길</span></h3>
		</div>
		<ul class="col-2 tac">
			<li>
				<!-- * 카카오맵 - 지도퍼가기 -->
				<!-- 1. 지도 노드 -->
				<div id="daumRoughmapContainer1641783551919" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100%;"></div>

				<!--
					2. 설치 스크립트
					* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
				-->
				<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

				<!-- 3. 실행 스크립트 -->
				<script charset="UTF-8">
					new daum.roughmap.Lander({
						"timestamp" : "1641783551919",
						"key" : "28qtn",
						"mapHeight" : "474"
					}).render();
				</script>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_map_01.jpg" alt="">
			</li>
		</ul>
	</div>
</section>

<section class="content map-icon">
	<div class="inner tac" style="max-width: 1400px; margin: 0 auto;">
		<ul class="col-3">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_map_02.jpg" alt="">
				<h5>찾아오시는 길</h5>
				<p class="fw500">경기도 시흥시 진말1로 18</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_map_03.jpg" alt="">
				<h5>대중교통 이용 시</h5>
				<p><span class="point-color">장곡어울림센터</span> - 5 · 32 · 3301<br>
				<span class="point-color">시흥경찰서</span> - 39 · 530 · 3300<br>
				<span class="point-color">대우아파트 / 장곡중학교</span> - 530</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_map_04.jpg" alt="">
				<h5>자가용 이용 시</h5>
				<p><span class="fw500">치과 건물내에 지하주차장</span> 사용 가능<br>
				(지하2층)<br><br>
				<span class="fw500">치과 건너편 행정복지센터 주차장</span> 사용 가능</p>
			</li>
		</ul>
	</div>
</section>

<style>
	@media screen and (max-width : 425px) {
		.col-3 li img{width: 50%;}
	}
</style>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>