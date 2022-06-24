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
		<li class="selected"><a href="<?php echo G5_URL ?>/info_time.php" target="_self">진료시간 및 예약안내</a></li>
		<li><a href="<?php echo G5_URL ?>/info_map.php" target="_self">찾아오시는 길</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/about_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('진료시간 및 예약안내');
		});
	</script>
</ul>
<section class="content info-time-area">
	<div class="inner">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>진료시간 및 예약안내</span></h3>
		</div>
		<ul class="col-2 tac mt5">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_time_01.jpg" alt="">
				<h5>진료시간 안내</h5>
				<div>
					<div class="info_time">
						<div>
							<span>평 일</span>
							<p>AM 09:00 ~ PM 05:30</p>
						</div>
						<div>
							<span class="point-color">화 · 수 · 목</span>
							<p class="point-color">AM 09:00 ~ PM 08:30
							(야간진료)</p>
						</div>
						<div>
							<span>토 요 일</span>
							<p>AM 09:00 ~ PM 02:00</p>
						</div>
						<div>
							<span>점 심 시 간</span>
							<p>PM 12:30 ~ PM 02:00</p>
						</div>
						<div>
							<span class="point-color">저 녁 시 간</span>
							<p class="point-color">PM 05:30 ~ PM 06:30</p>
						</div>
						
						<div class="notice">
							<p>* 토요일은 점심시간 없이 진료합니다.</p>
							<p>* 공휴일 및 일요일은 휴진입니다.</p>
						</div>
					</div>
				</div>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/info_time_02.jpg" alt="">
				<h5>진료문의 및 예약</h5>
				<h3 class=" pt3"><a href="tel:031-506-2080" class="point-color">031. 506. 2080</a></h4>
				<ul class="col-3 pt5 m-col-3" style="max-width: 400px; margin: 0 auto;">
					<li>
						<a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')"><img src="<? echo G5_THEME_IMG_URL; ?>/main/quick_blog.png" alt=""></a>
					</li>
					<li class="mt0">
						<a href="javascript:alert('현재 오픈 준비중 입니다. 빠른 시일 내에 찾아뵙겠습니다.')"><img src="<? echo G5_THEME_IMG_URL; ?>/main/quick_naver.png" alt=""></a>
					</li>
					<li class="mt0">
						<a href="http://pf.kakao.com/_IxoRPb"><img src="<? echo G5_THEME_IMG_URL; ?>/main/quick_kakao.png" alt=""></a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</section>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>