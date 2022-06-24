<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>
<div class="banner-bg ortho-bg">
	<p>HAON DENTAL CLINIC</p>
	<h2><span>HAON : </span>치아교정</h2>
	<hr>
</div>
<div class="nav-menu pc-nav">
	<ul>
		<li class="selected"><a href="<?php echo G5_URL ?>/ortho_special.php" target="_self">교정의 특별함</a></li>
		<li><a href="<?php echo G5_URL ?>/ortho_age.php" target="_self">연령 별 치아교정</a></li>
		<li><a href="<?php echo G5_URL ?>/ortho_braces.php" target="_self">장치 별 치아교정</a></li>
		<li><a href="<?php echo G5_URL ?>/ortho_type.php" target="_self">증상 별 치아교정</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/ortho_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('교정의 특별함');
		});
	</script>
</ul>
<section class="content special-title pb2 ortho-special-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>하온치과 치아교정의 특별함</span></h3>
			<span class="slash"></span>
			<h4 >오랜기간 진행되는 치아교정<br>
			하나부터 열까지 꼼꼼히 챙기고 함께합니다.</h4>
		</div>
	</div>
</section>

<section class="content ortho-bg1 bg-gray">
	<div class="inner">
		<div class="middle-title" style="color: #fff;">
			<h4>하온치과 치아교정이 특별한 이유</h4>
			<p>교정 원장님의 오랜 진료 경험으로 최적의 치료결과를 만듭니다.
			단순 치아 상태가 아닌 잇몸뼈, 턱뼈, 턱관절, 혀 위치 등을 확인하여
			통합적인 기준으로 치료계획을 수립합니다.
			</p>
		</div>
		<ul class="col-3 sq-circle">
			<li data-aos="fade-up" data-aos-duration="2000">
				<span>01</span>
				<h5>구강을 통합적으로
				보는 치료계획</h5>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_12.png" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<span>02</span>
				<h5>유지관리 및
				보증시스템</h5>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_14.png" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
				<span>03</span>
				<h5>교정결과를 미리보는
				Webceph 활용</h5>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_13.png" alt="">
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<p>오직 교정만을 치료하는 교정원장의 노하우</p>
			<h4>하온치과의 치아교정은 특별합니다!</h4>
		</div>
		<div data-aos="zoom-in" data-aos-duration="2000">
			<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_02.jpg" alt="">
		</div>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<p>오직 당신만을 위한 밀착 교정 치료</p>
			<h4>HAON 1:1 PROCESS</h4>
		</div>
		<ul class="col-5 line-list">
			<li class="num2" data-num="STEP
			01">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_05.jpg" alt="">
				<h5>기초 조사 및 상담</h5>
			</li>
			<li class="num2" data-num="STEP
			02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_06.jpg" alt="">
				<h5>X-RAY / 구강 / 안면촬영</h5>
			</li>
			<li class="num2" data-num="STEP
			03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_07.jpg" alt="">
				<h5>치열을 위한 인상채득</h5>
			</li>
			<li class="num2" data-num="STEP
			04">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_08.jpg" alt="">
				<h5>분석 및 치료계획 수립</h5>
			</li>
			<li class="num2" data-num="STEP
			05">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_09.jpg" alt="">
				<h5>진단 및 상담</h5>
			</li>
			<li class="num2" data-num="STEP
			06">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_10.jpg" alt="">
				<h5>장치 장착, 치료</h5>
			</li>
			<li class="num2" data-num="STEP
			07">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_11.jpg" alt="">
				<h5>주기적 내원</h5>
			</li>
			<li class="num2" data-num="STEP
			08">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_12.jpg" alt="">
				<h5>장치 제거 및 유지장치 장착</h5>
			</li>
			<li class="num2" data-num="STEP
			09">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_13.jpg" alt="">
				<h5>유지 및 사후관리</h5>
			</li>
			
		</ul>
	</div>
</section>

<section class="content bg-gray">
	<div class="inner">
		<div class="middle-title">
			<h4>정품재료를 통한 품위있는 진료</h4>
			<p>하온치과는 안전성이 입증된 정품 재료를 사용하므로써 
			그와 비례하는 교정결과를 보여드립니다.
			또한, 다양한 교정장치를 구비하여 완성도 있는 교정진료가 가능합니다!</p>
		</div>
		<ul class="col-3 line-list top-left-circle">
			<li data-string="100% 정품">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_03.png" alt="">
				<h5>클리피씨</h5>
			</li>
			<li data-string="100% 정품">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_04.png" alt="">
				<h5>엠파워</h5>
			</li>
			<li data-string="100% 정품">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_05.png" alt="">
				<h5>인비절라인</h5>
			</li>
		</ul>
	</div>
</section>

<section class="content bg-gray ortho-bg2 mt0">
	<div class="inner">
		<ul class="basic-box pb5">
			<li>
				<span>HAON DENTAL CLINIC</span>
				<h5><span style="color: #8536f8;">WEB-CEPH</span>을 활용한
				미리보기 기술력</h5>
				<p>인공지능을 활용한 시뮬레이션 시스템 활용</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_07.png" alt="">
			</li>
		</ul>
		<ul class="col-3 line-list mt5">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_08.png" alt="">
				<h5>Profilogram</h5>
				<p>인공지능 자동 각도계측을 이용하여<br>
				치아나 골격의 부조화를 확인 및 비교</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_09.png" alt="">
				<h5>전문적인 VTO / STO 시뮬레이션</h5>
				<p>임상사진 자동 정렬 및<br>
				모의치료 시뮬레이션</p>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_10.png" alt="">
				<h5>미리보는 FACE 스캔</h5>
				<p>인공지능으로 만들어진 교정 전, 후<br>
				시뮬레이션을 화면으로 확인 가능!</p>
			</li>
		</ul>
	</div>
</section>

<!-- <section class="content">
	<div class="inner tac">
		<div>
			<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_06.png" alt="">
		</div>
	</div>
</section>

<section class="content bg-gray ortho-bg3 mt0">
	<div class="inner tac">
		<h4 class="fw300 mb5">걱정마세요!<br>
		하온치과 <span class="fw700">교정유지시스템</span>이 있어요!</h4>

		<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_special_11.png" alt="">
		<ul class="col-4" style="max-width: 900px; margin: 0 auto;">
			<li>#회귀성 방지</li>
			<li>#재교정 예방</li>
			<li>#성공적인 치아교정</li>
			<li># 하온 치아교정!</li>
		</ul>
	</div>
</section> -->

<style>
	.line-list li img{border: none;}
	.ortho-bg2 .basic-box > li > span{letter-spacing: 1em; font-size: 18px; font-weight: 500;}
	.ortho-bg2 .basic-box h5{font-size: 52px; letter-spacing: 2px;}
	.ortho-bg2 .basic-box p{font-size: 24px; color: #777;}

	.ortho-bg3 .col-4 li{color: #fff; background-color: #333; border-radius: 20px; padding: 10px 0;}

	@media screen and (max-width:769px) {
		.ortho-bg2 .basic-box > li > span{font-size: 14px;}
		.ortho-bg2 .basic-box h5{font-size: 44px;}
		.ortho-bg2 .basic-box p{font-size: 20px;}
		.ortho-bg2 .col-3 li{width: 60%; margin-top: 5%;}
		.ortho-bg2 .basic-box li:first-child{margin-bottom: 5%;}
	}
	
	@media screen and (max-width:425px) {
		.ortho-bg2 .basic-box > li > span{font-size: 12px;}
		.ortho-bg2 .basic-box h5{font-size: 30px;}
		.ortho-bg2 .basic-box p{font-size: 16px;}
		.ortho-bg3 .col-4 li{font-size: 14px;}
	}
</style>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>