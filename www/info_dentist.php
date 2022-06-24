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
		<li class="selected"><a href="<?php echo G5_URL ?>/info_dentist.php" target="_self">경험이 다른 의료진</a></li>
		<li><a href="<?php echo G5_URL ?>/info_interior.php" target="_self">둘러보기</a></li>
		<li><a href="<?php echo G5_URL ?>/info_time.php" target="_self">진료시간 및 예약안내</a></li>
		<li><a href="<?php echo G5_URL ?>/info_map.php" target="_self">찾아오시는 길</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/about_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('경험이 다른 의료진');
		});
	</script>
</ul>
<section class="content tab-wrap mb3">
	<div class="inner">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>경험이 다른</span> 의료진</h3>
		</div>
	</div>
</section>

<section class="content sub-banner-bg bg-dentist mt0">
	<div class="inner tac">
		<h4 class="nsk" style="color: #fff;"><b>풍부한 임상 경험</b>을 바탕으로<br>
		만족스러운 치료 결과를 만들어갑니다.</h4>
	</div>
</section>

<section class="content">
	<div class="inner">
		<ul class="basic-box">
			<li data-aos="fade-up" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/doctor_01.jpg" alt="">
			</li>
			<li>
				<h4 class="nsk">정직함으로 믿음을 드리겠습니다.</h4>
				<h5>허용호 대표원장</h5>
				<p style="color: #777;">단국대학교 치과대학 학사
				보건복지부 인증 통합치의학 전문의
				교합학회 정회원

				Dio implant 연구센터 자문위원
				Dio implant 임상연구 자문위원
				Dentis implant 임상 자문 위원
				Osstem implant master course 수료
				Osstem implant 임상 자문위원</p>
			</li>
		</ul>
		<ul class="basic-box">
			<li data-aos="fade-up" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/doctor_02.jpg" alt="">
			</li>
			<li>
				<h4 class="nsk">당신의 미소를 찾아드리겠습니다.</h4>
				<h5>장영광 교정원장</h5>
				<p style="color: #777;">치과교정과 전문의 (보건복지부 인증)
				통합치의학과 전문의 (보건복지부 인증)
				서울대학교 치의학대학원 치과교정학 박사과정
				단국대학교 치과대학병원 치과교정과 레지던트
				단국대학교 치과대학 학사,석사 졸업
				대한치과교정학회 정회원 및 인정의
				미국치과교정학회 회원
				세계치과교정연맹 회원
				미국 Invisalign course 수료

				<span class="fw500">◆ 미국 SCI 논문 제 1저자</span>
				A comparative evaluation of midfacial soft tissue and nasal bone changes
				with two maxillary protraction protocols: Tooth‐borne vs skeletal‐anchored facemasks.
				Orthod Craniofacial Research. 2020 

				<span class="fw500">◆ 국제, 국내 학술활동</span>
				International Orthodontic Congress 2020 IOC E-poster 
				대한치과교정학회 2020 KAO annual scientific congress E-poster 
				대한치과교정학회 2020전공의 학술대회 
				미국교정학회 2019 AAO annual meeting E-poster 
				일본교정학회 2018 JOS annual meeting E-poster
				대한구순구개열학회 2018 제22회 학술대회 poster </p>
			</li>
		</ul>
		<ul class="basic-box">
			<li data-aos="fade-up" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/doctor_03.jpg" alt="">
			</li>
			<li>
				<h4 class="nsk">친절한 소통으로 마음까지 헤아리겠습니다.</h4>
				<h5>김선범 원장</h5>
				<p style="color: #777;">단국대학교 치과대학 학사
				보건복지부 인증 통합치의학과전문의
				대한보철학회 정회원
				대한구강악안면임플란트학회 정회원
				Osstem implant master course 수료</p>
			</li>
		</ul>
	</div>
</section>

<style>
/* .basic-box{align-items: flex-start;} */
</style>


<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>