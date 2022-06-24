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
		<li><a href="<?php echo G5_URL ?>/ortho_special.php" target="_self">교정의 특별함</a></li>
		<li><a href="<?php echo G5_URL ?>/ortho_age.php" target="_self">연령 별 치아교정</a></li>
		<li class="selected"><a href="<?php echo G5_URL ?>/ortho_braces.php" target="_self">장치 별 치아교정</a></li>
		<li><a href="<?php echo G5_URL ?>/ortho_type.php" target="_self">증상 별 치아교정</a></li>
	</ul>
</div>
<ul class="m-nav">
	<?php
		include_once(G5_PATH.'/ortho_nav.php');
	?>
	<script>
		$(document).ready(function(){
			$('.sub-menu02').prev().html('장치 별 치아교정');
		});
	</script>
</ul>
<section class="content special-title pb2 ortho-braces-bg">
	<div class="inner tac">
		<div class="title">
			<p>HAON DENTAL CLINIC</p>
			<h3><span>장치 별 치아교정</span></h3>
			<span class="slash"></span>
			<h4 >나에게 맞는 장치를 선택하여<br>
			교정을 시작해보세요!</h4>
		</div>
	</div>
</section>

<section class="content pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_02.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5>세라믹 교정</h5>
				<p>눈에 잘 띄는 메탈 교정장치의 단점을 보완하기 위해
				개발된 장치로서 치아와 같은 하얀색 도자기로 만들어
				눈에 잘 띄지 않는 심미적인 장치입니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content pt0 pb5 mmt1 mpb7">
	<div class="inner tac" style="max-width: 1000px;">
		<div class="middle-title">
			<h4>세라믹 교정 CHECK POINT</h4>
		</div>
		<ul class="strengths">
			<li>
				<p>도자기 색이라 브라켓이 잘 보이지 않아 <b class="fw500">심미성이 우수</b></p>
			</li>
			<li>
				<p>브라켓의 변색이나 착색이 일어나지 않음</p>
			</li>
			<li>
				<p>라운딩처리로 이물감이 적어 <b class="fw500">편안한 발음</b>이 가능</p>
			</li>
			<li>
				<p>메탈 브라켓에 비해 <b class="fw500">심미적</b></p>
			</li>
		</ul>
	</div>
</section>

<section class="content pt5 pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_03.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5>클리피씨 교정</h5>
				<p>미적이고 치료기간을 단축시키는 교정장치로
				개발된 자가결찰 교정장치입니다.
				자가결찰 장치는 교정장치와 교정철사 아이를
				따로 묶을 필요가 없기 때문에 마찰력이 작습니다.
				그로 인해 약한 힘으로도 치아가 움직이므로
				치아의 이동이 빠르고 통증이 적은 치료방법입니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content pt0 pb5 mmt1 mpb7">
	<div class="inner tac" style="max-width: 1000px;">
		<div class="middle-title">
			<h4>클리피씨 교정 CHECK POINT</h4>
		</div>
		<ul class="strengths">
			<li>
				<p>일반브라켓보다 <b class="fw500">교정 통증완화</b></p>
			</li>
			<li>
				<p>구강위생에 유리하여 <b class="fw500">충치나 잇몸병의 감소</b></p>
			</li>
			<li>
				<p>치아이동이 빠르게 되어 <b class="fw500">교정 소요기간 단축</b></p>
			</li>
			<li>
				<p>결찰 철사가 없어 <b class="fw500">입안과 혀를 찌르지 않음</b></p>
			</li>
		</ul>
	</div>
</section>

<section class="content pt5 pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_04.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5>엠파워 교정</h5>
				<p>미국 Ameraica Orthodontics사에서 개발한
				신개념 자가결찰 교정장치입니다.
				타 교정 장치에 비해 브라켓과 와이어 사이 마찰력이
				1/500수준으로 적어 통증이 적고 치아 이동 속도 또한 빠릅니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content pt0 pb5 mmt1 mpb7">
	<div class="inner tac" style="max-width: 1000px;">
		<div class="middle-title">
			<h4>엠파워 교정 CHECK POINT</h4>
		</div>
		<ul class="strengths">
			<li>
				<p>장치 자체에 CAP 형태의 자가결찰 방식으로 <b class="fw500">치료기간 감소</b></p>
			</li>
			<li>
				<p>와이어를 감을 필요 없어 <b class="fw500">통증 감소</b></p>
			</li>
			<li>
				<p>세계적인 교정업체, 미국 AO가 개발한 <b class="fw500">신개념 자가결찰 교정장치</b></p>
			</li>
			<li>
				<p>사이즈가 작고 모서리가 라운딩 처리되어 <b class="fw500">편안한 착용감</b></p>
			</li>
		</ul>
	</div>
</section>

<section class="content pt5 pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_05.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5>인비절라인 (투명교정)</h5>
				<p>인비절라인은 투명한 플라스틱 교정 장치로, 
				국내에서 제작하는 투명교정장치와 달리
				미국 인비절라인 본사에서
				디지털 3D컴퓨터 시뮬레이션을 이용해 만들어집니다.
				30여 단계로 세분화된 각각의 치아 모형이 개인 맞춤으로 제작되어
				치아의 이동 경로를 예측할 수 있습니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>인비절라인 교정방법</h4>
		</div>
		<ul class="col-3 line-list">
			<li class="num" data-num="01">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_06.jpg" alt="">
				<h5>3D 정밀진단</h5>
			</li>
			<li class="num" data-num="02">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_07.jpg" alt="">
				<h5>환자 맞춤형 치료계획 상담</h5>
			</li>
			<li class="num" data-num="03">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_08.jpg" alt="">
				<h5>미국본사로 치료계획 발송 및
				장치 제작</h5>
			</li>
			<li class="num" data-num="04">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_09.jpg" alt="">
				<h5>장치 국내배송</h5>
			</li>
			<li class="num" data-num="05">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_10.jpg" alt="">
				<h5>인비절라인 교정 시작</h5>
			</li>
			<li class="num" data-num="06">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_11.jpg" alt="">
				<h5>인비절라인 교정 후
				유지 관리</h5>
			</li>
		</ul>	
	</div>
</section>

<section class="content">
	<div class="inner">
		<div class="middle-title">
			<h4>당신은 지금 <span class="point-color">어느 쪽</span>입니까?</h4>
		</div>
		<ul class="col-2 line-list before-after">
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_12.png" alt="">
				<span>치아교정 할래요?</span>
			</li>
			<li>
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_13.png" alt="">
				<span>인비절라인 하겠어요!</span>
			</li>
		</ul>
	</div>
</section>


<section class="content ortho-bg6 bg-gray">
	<div class="inner">
		<div class="ortho-bg6-txt">
			<h4 class="nsk fw700">보이지 않는 인비절라인,</h4>
			<p>가지런한 치아의 아름다움을 선사합니다.</p>
			<span class="slash"></span>
			<h4 class="nsk fw700">하온치과가 함께합니다.</h4>
		</div>
	</div>
</section>

<section class="content pt5 pb5">
	<div class="inner">
		<ul class="basic-box">
			<li class="point-box" data-aos="fade-right" data-aos-duration="2000">
				<img src="<? echo G5_THEME_IMG_URL; ?>/sub/ortho_braces_14.jpg" alt="">
			</li>
			<li data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
				<h5>설측 교정</h5>
				<p>교정 장치가 잘 보이지 않도록 안쪽 치아면에 브라켓을 붙이는 교정입니다. 
				설측교정은 대외 활동이 많으신 분, 승무원,
				심미적으로 신경이 많이 쓰이신 분, 
				결혼을 앞두고 계신 분들이 선호하는 교정 장치이며
				심미적이라는 단연 큰 장점과
				진료 시 고도의 기술을 필요로 한다는 점으로 인해
				일반 교정 치료에 비해 비교적 비용이 조금 더 비쌉니다.</p>
			</li>
		</ul>
	</div>
</section>

<section class="content pt0 pb5 mmt1 mpb7">
	<div class="inner tac" style="max-width: 1000px;">
		<div class="middle-title">
			<h4>설측 교정 CHECK POINT</h4>
		</div>
		<ul class="strengths">
			<li>
				<p><b class="fw500">치아 안쪽에 교정 장치가 부착</b>되므로 심미적으로 우수</p>
			</li>
			<li>
				<p>안쪽에 부착된 교정장치로 인해 입이 돌출되어 보이지 않음</p>
			</li>
			<li>
				<p>치아의 이동을 역학적으로 더 잘 조절할 수 있음</p>
			</li>
			<li>
				<p>심미성이 높은 투명교정과는 다르게 모든 사례에 적용이 가능</p>
			</li>
		</ul>
	</div>
</section>

<style>
	.before-after span{border-radius: 40px; margin-top: 5%;}
	.ortho-bg6{padding: 8% 0px;}
	.ortho-bg6-txt p{font-size: 22px;}
	.ortho-bg6-txt .slash{border: 1px solid #333; margin: 3% 0;}
	.ortho-bg6-txt{display: inline-block; text-align: center;}

	@media screen and (max-width:769px) {
		.ortho-bg6-txt .slash{height: 80px;}
	}
	
	@media screen and (max-width:425px) {

	}
</style>

<?php
include_once(G5_THEME_PATH.'/sub_footer.php');
?>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
include_once(G5_THEME_PATH.'/tail2.php');
?>